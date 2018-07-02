<?php
$db = "blog";
$servername = "localhost";
$username = "roel";
$password = "Roel@3920";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
