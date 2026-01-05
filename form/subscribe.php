<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../common/config.php";
$mysqli = new mysqli($HOST,$DB_USER,$DB_PWD,$DB_NAME);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        $result = $mysqli->query("SELECT * FROM subscribe where email ='".$email."'");
        if ($result->num_rows > 0) {
            echo "This email is already subscribed.";
        } else {
            $result = $mysqli->query("INSERT INTO subscribe (email) VALUES ('".$email."')");
            if ($result) {
                header("Location:".$BASE_URL.'thank-you');
                exit(); 
            } else {
                echo "Error: " . $mysqli->error;
            }
        }
    }
}
?>