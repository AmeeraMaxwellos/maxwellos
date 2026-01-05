<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../common/config.php";
include "mail.php";


$mysqli = new mysqli($HOST,$DB_USER,$DB_PWD,$DB_NAME);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $countryCode = $_POST['country_code'];
    $phoneNumber = str_replace(' ','',$_POST['phone']);
    $Full_phoneNumber = $_POST['phone_full'];
    $companyName = $_POST['companyName'];
    $service = $_POST['requirementType'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($countryCode)) {
        $errors[] = "Country code is required";
    } elseif (!preg_match("/^[a-zA-Z]{2,3}$/", $countryCode)) {
        $errors[] = "Invalid country code format";
    }

    if (empty($phoneNumber)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match('/^[0-9 +]{8,20}$/i', $phoneNumber) ) {
        $errors[] = "Invalid phone number format";
    }

    if (!empty($companyName) && strlen($companyName) > 100) {
        $errors[] = "Company name should be less than 100 characters";
    }

    if (empty($service)) {
        $errors[] = "Service is required";
    }

    if (!empty($subject) && strlen($subject) > 255) {
        $errors[] = "Subject should be less than 255 characters";
    }

    if (!empty($message) && strlen($message) > 1000) {
        $errors[] = "Message should be less than 1000 characters";
    }

    if (empty($errors)) {
        $message = addslashes($message);
        $subject = addslashes($subject);
        
               $result = $mysqli->query("INSERT INTO `contact` (`name`, `email`, `countrycode`, `phonenumber`, `companyname`, `service`, `subject`, `message`, `date_added`) VALUES ('$name', '$email', '$countryCode', '$Full_phoneNumber', '$companyName', '$service', '$subject', '$message', CURRENT_TIMESTAMP)");

        if ($result) {
            $htmlmessage = "
<html>
<head>
  <title>New Inquiry Details</title>
  <style>
    table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>New Inquiry Received</h2>
  <p>Here are the details of the inquiry submitted:</p>
  <table>
    <tr>
      <th>Name</th><td>{$name}</td>
    </tr>
    <tr>
      <th>Email</th><td>{$email}</td>
    </tr>
    <tr>
      <th>Country Code</th><td>{$countryCode}</td>
    </tr>
    <tr>
      <th>Phone Number</th><td>{$phoneNumber}</td>
    </tr>
    <tr>
      <th>Full Phone Number</th><td>{$Full_phoneNumber}</td>
    </tr>
    <tr>
      <th>Company Name</th><td>{$companyName}</td>
    </tr>
    <tr>
      <th>Service Required</th><td>{$service}</td>
    </tr>
    <tr>
      <th>Subject</th><td>{$subject}</td>
    </tr>
    <tr>
      <th>Message</th><td>{$message}</td>
    </tr>
  </table>
  <p>End of details.</p>
</body>
</html>
";
            sendmail('info@maxwellos.com','New Lead From Maxwellos',$htmlmessage);
            header("Location:".$BASE_URL.'thank-you');
            exit(); 
        } else {
            echo "Error: " . $mysqli->error;
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>