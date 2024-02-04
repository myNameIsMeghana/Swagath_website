<?php
// Establish database connection
$servername = "localhost";
$username = "u319392618_contact_us";
$password = "Swdb@123";
$dbname = "u319392618_Swagath";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO contact_form_data (name, email, subject, message) VALUES ('$name', '$email', '$sub', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
