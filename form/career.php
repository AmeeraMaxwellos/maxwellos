<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../common/config.php";
require "mail.php";

/* ================= DATABASE CONNECTION ================= */
$mysqli = new mysqli(
    "195.179.239.116",
    "u508573443_maxwellos_1",
    "!Kf]*Gr?6Zr",
    "u508573443_maxwellos_1"
);

if ($mysqli->connect_errno) {
    die("Database connection failed");
}

/* ================= ONLY POST ================= */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request");
}

/* ================= INPUT ================= */
$name        = trim($_POST['name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$countryCode = trim($_POST['country_code'] ?? '');
$phone       = preg_replace('/\s+/', '', $_POST['phone'] ?? '');
$phoneFull   = trim($_POST['phone_full'] ?? '');
$country     = trim($_POST['country'] ?? '');
$experience  = trim($_POST['experience'] ?? '');
$jobType     = trim($_POST['jobType'] ?? '');
$jobCategory = trim($_POST['jobCategory'] ?? '');
$coverLetter = trim($_POST['coverletter'] ?? '');

$errors = [];

/* ================= VALIDATION ================= */
if ($name === '') $errors[] = "Name required";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email";
}

if (!preg_match('/^(\+?[0-9]{1,4}|[A-Z]{2})$/i', $countryCode)) {
    $errors[] = "Invalid country code";
}


if (!preg_match('/^[0-9]{8,20}$/', $phone)) {
    $errors[] = "Invalid phone number";
}

/* ================= FILE UPLOAD ================= */
if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
    $errors[] = "Resume upload failed";
}

if (!empty($errors)) {
    echo implode("<br>", $errors);
    exit;
}

$UPLOAD_PATH = rtrim($UPLOAD_PATH, '/') . '/';

if (!is_dir($UPLOAD_PATH)) {
    mkdir($UPLOAD_PATH, 0755, true);
}

$originalName = basename($_FILES['resume']['name']);
$safeName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $originalName);
$filename = time() . '-' . $safeName;
$filePath = $UPLOAD_PATH . $filename;

if (!move_uploaded_file($_FILES['resume']['tmp_name'], $filePath)) {
    die("Failed to save resume");
}

/* ================= INSERT DB (SECURE) ================= */
$stmt = $mysqli->prepare("
    INSERT INTO career
    (name, email, countrycode, phonenumber, country, experience, jobtype, jobcategory, coverletter, resume, date_added)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
");

$stmt->bind_param(
    "ssssssssss",
    $name,
    $email,
    $countryCode,
    $phoneFull,
    $country,
    $experience,
    $jobType,
    $jobCategory,
    $coverLetter,
    $filename
);

if (!$stmt->execute()) {
    die("Database insert failed");
}

/* ================= EMAIL ================= */
$htmlMessage = "
<html>
<body>
<h2>New Job Application</h2>
<table border='1' cellpadding='8'>
<tr><th>Name</th><td>{$name}</td></tr>
<tr><th>Email</th><td>{$email}</td></tr>
<tr><th>Phone</th><td>{$phoneFull}</td></tr>
<tr><th>Country</th><td>{$country}</td></tr>
<tr><th>Experience</th><td>{$experience}</td></tr>
<tr><th>Job Type</th><td>{$jobType}</td></tr>
<tr><th>Category</th><td>{$jobCategory}</td></tr>
</table>
</body>
</html>
";

$mailSubject = "Job Application from {$name}";

sendmail(
    "hr@maxwellos.com",
    $mailSubject,
    $htmlMessage,
    $filePath
);

/* ================= REDIRECT ================= */
header("Location: " . $BASE_URL . "thank-you");
exit;
