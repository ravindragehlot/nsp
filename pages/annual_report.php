<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../config/config.php';
require_once BASE_PATH.'/includes/header_page.php'; 

?>

<div id="page-wrapper" id="main">




<?php include_once BASE_PATH.'/includes/footer_page.php'; ?>