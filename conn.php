<?php 
$servername = "localhost";
$username = "jem"; // replace with your MySQL username
$password = "jem"; // replace with your MySQL password
$database = "form"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>