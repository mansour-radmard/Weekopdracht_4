<?php
// Database connection variables
$servername = "localhost";
$username = "root";
$passwoord = "root";
$dbname = "blog";

// $ROOT = './';

// Performs a connection with mysql server
$conn = new mysqli($servername, $username, $passwoord, $dbname);

// In case connection fails give error
if ($conn->connect_error) {
   die("Connection died: " . $conn->connect_error);
}
