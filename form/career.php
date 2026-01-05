<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../common/config.php";
include "mail.php";

$mysqli = new mysqli("195.179.239.116","u508573443_maxwellos","!Kf]*Gr?6Zr","u508573443_maxwellos");
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
    $country = $_POST['country'];
    $experience = $_POST['experience'];
    $jobtype = $_POST['jobType'];
    $jobcategory = $_POST['jobCategory'];
    $coverletter = $_POST['coverletter'];
    
    $filename ="";
    
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
    } elseif (!preg_match('/^[0-9 +]{8,20}$/i', $phoneNumber)) {
        $errors[] = "Invalid phone number format";
    }

   
    
    if (isset($_FILES['resume'])) {
        $resume = $_FILES['resume']['name'];
        $resume_tmp = $_FILES['resume']['tmp_name'];
        $filename = time().'-'. $_FILES['resume']['name'];
        $file = $UPLOAD_PATH .$filename;
        if (!is_dir($UPLOAD_PATH)) {
            mkdir($UPLOAD_PATH, 0777, true); // Create uploads directory if not exists
        }

        // Move the uploaded file
        move_uploaded_file($resume_tmp, $file);
    } else {
        die("Please upload your resume.");
    }
    

    if (empty($errors)) {

        $coverletter = addslashes($coverletter);
        
        $result = $mysqli->query("INSERT INTO `career` (`name`, `email`, `countrycode`, `phonenumber`, `country`, `experience`, `jobtype`, `jobcategory`,`coverletter`, `resume`, `date_added`) VALUES ('$name', '$email', '$countryCode', '$Full_phoneNumber', '$country', '$experience', '$jobtype', '$jobcategory', '$coverletter', '$filename', CURRENT_TIMESTAMP)");
        // echo 
        if ($result) {
            $htmlmessage = "
<html>
<head>
  <title>New Job Application</title>
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
  <h2>Job Application Details</h2>
  <p>A new job application has been submitted. Here are the details:</p>
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
      <th>Country</th><td>{$country}</td>
    </tr>
    <tr>
      <th>Years of Experience</th><td>{$experience}</td>
    </tr>
    <tr>
      <th>Job Type</th><td>{$jobtype}</td>
    </tr>
    <tr>
      <th>Job Category</th><td>{$jobcategory}</td>
    </tr>
    <tr>
      <th>Cover Letter</th><td>{$coverletter}</td>
    </tr>
  </table>
  <p>End of the application.</p>
</body>
</html>
";
            $mailSubject = "Job Application from " . $name;
             sendmail('hr@maxwellos.com',$mailSubject,$htmlmessage,$file);
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