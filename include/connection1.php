<?php
// Include MySQL compatibility layer for older PHP functions
include_once(__DIR__ . '/../mysql_compatibility.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "3planet_db";

// Create MySQLi connection
$connection = new mysqli($dbhost, $dbuser, $dbpassword);

// Check initial connection (without database)
if ($connection->connect_error) {
    error_log("Database connection failed: " . $connection->connect_error);
    // Don't die here, just log the error and continue
    $connection = null;
} else {
    // Try to select the database
    if (!$connection->select_db($dbname)) {
        // Database doesn't exist, try to create it
        $create_db_query = "CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
        if ($connection->query($create_db_query)) {
            $connection->select_db($dbname);
            error_log("Database '$dbname' created successfully");
        } else {
            error_log("Failed to create database '$dbname': " . $connection->error);
            // Don't die, just continue without database connection
        }
    }
}

// Set charset to utf8mb4 for full Unicode support (only if connection exists)
if ($connection) {
    $connection->set_charset("utf8mb4");
}

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

// Global connection variable for backward compatibility
$conn = $connection;
$mysql_link = $connection;
?>