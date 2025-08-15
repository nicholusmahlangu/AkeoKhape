<?php
// DB connection settings
$host = "localhost";
$dbname = "akeokhapedb";
$username = "root"; // change if not using root
$password = "";     // change if you have a password

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}