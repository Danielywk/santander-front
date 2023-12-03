<?php
//error_reporting(0);
ob_start();
session_start();
$siteName = "Cipet.in";

//DEFINE("BASE_URL","http://cipetbhopal.com/");
DEFINE("BASE_URL","http://54.209.23.44/rainbow/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'isaias');
DEFINE ('DB_HOST', '54.209.23.44');
DEFINE ('DB_NAME', 'payroll'); 

date_default_timezone_set('Asia/Calcutta');
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
die("Failed to connect database ".$conn->connect_error );
?>