<?php
error_reporting(0);
ob_start();
session_start();
$siteName = "Cipet.in";

DEFINE("BASE_URL","http://cipetbhopal.com/");
//DEFINE("BASE_URL","http://localhost/rainbow/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'isaias');
DEFINE ('DB_HOST', '54.209.23.44');
DEFINE ('DB_NAME', 'payroll'); 

date_default_timezone_set('Asia/Calcutta');
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
try {
    if ($conn->connect_error) {
        throw new Exception("Failed to connect to database: " . $conn->connect_error);
    }

    // Resto del código para operaciones con la base de datos...
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
