<?php
// Assume connection to database and validation have been done
session_start();
include("conn.php"); // Your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $coursec = $_POST['coursec'];

    // Prepare and execute the insert query
    $sql = "INSERT INTO user_data (firstname, middlename, lastname, age, address, coursec) VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$coursec')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['form_status'] = 'success'; // Set session variable to show success modal
    } else {
        $_SESSION['form_status'] = 'error'; // Set session variable to show error modal
    }
    
    // Redirect back to index.php
    header('Location: index.php');
    exit();
}
?>
