<?php
// MAMP uses port 8888
// $BASE_URL = 'http://localhost:8888/maxwellos-web/';
$BASE_URL = 'https://www.maxwellos.com/';

// FIX: Changed REQUEST_URL to REQUEST_URI
$path = explode('/', $_SERVER['REQUEST_URI']);
$PAGE = $path[count($path) - 2];

define('BASEPATH', __DIR__);
$BASE_PATH = str_replace('common', "", BASEPATH);
$UPLOAD_PATH = $BASE_PATH . 'assets/uploads/';

// MAMP database credentials
// $HOST = "localhost";
// $DB_USER = "root";
// $DB_PWD = "root";
// $DB_NAME = "maxwellos_local";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// $BASE_URL = 'https://www.maxwellos.com/';
// $BASE_URL = 'http://localhost/maxwellos-web/';
// $path = explode('/', $_SERVER['REQUEST_URI']);
// $PAGE=$path[count($path) - 2];
// define('BASEPATH', __DIR__);
// $BASE_PATH = str_replace('common',"",BASEPATH);
// $UPLOAD_PATH = $BASE_PATH.'/assets/uploads/';

$HOST = "195.179.239.116";
$DB_USER = "u508573443_maxwellos";
$DB_PWD = "!Kf]*Gr?6Zr";
$DB_NAME = "u508573443_maxwellos";


?>