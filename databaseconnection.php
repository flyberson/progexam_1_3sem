<?php

$servername = "localhost";
$username = "root";
$password = "yoyo";
$dbname = "progexam_1";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
echo "Connection failed";
        include 'createDatabase.php';

    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





