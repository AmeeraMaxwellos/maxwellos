<?php
// MAMP uses port 8888
$BASE_URL = 'http://localhost:8888/maxwellos-web/'; 
// $BASE_URL = 'https://www.maxwellos.com/';

$path = explode('/', $_SERVER['REQUEST_URI']);
$PAGE = $path[count($path) - 2];

define('BASEPATH', __DIR__);
$BASE_PATH = str_replace('common', "", BASEPATH);
$UPLOAD_PATH = $BASE_PATH . 'assets/uploads/';

error_reporting(E_ALL);
ini_set('display_errors', 1);


$HOST = "195.179.239.116";
$DB_USER = "u508573443_maxwellos_1";
$DB_PWD = "!Kf]*Gr?6Zr";
$DB_NAME = "u508573443_maxwellos_1";


?>
