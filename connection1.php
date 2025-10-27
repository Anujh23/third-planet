<?php
include_once(__DIR__ . '/../../mysql_compatibility.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "3planet_db";

// Create MySQLi connection
$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Set charset to utf8mb4 for full Unicode support
$connection->set_charset("utf8mb4");

//website url path
$urlroot = "http://localhost/third-planet/";

//image uploading path
//$imgroot  = "/home/nsfilmsi/public_html/nsfilms/admin/";  // live path settings
$imgroot  = "C:/xampp/htdocs/third-planet/admin/";        // local path settings

//session secuirty check
ini_set('session.cookie_httponly', true);
session_start();
if(isset($_SESSION['last_ip']) === false) {
$_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
}

if($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR']) {
session_unset();
session_destroy();
}