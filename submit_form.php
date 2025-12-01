<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "galgotias_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$admission_no = $_POST['admission_no'];
$email = $_POST['email'];
$additional_email = $_POST['additional_email'];
$address = $_POST['address'];
$username_f = $_POST['username'];
$password_f = $_POST['password'];
$contact_number = $_POST['contact_number'];
$gender = $_POST['gender'];
$message = $_POST['message'];

$sql = "INSERT INTO students_form 
(first_name, middle_name, last_name, admission_no, email, additional_email, address, username, password, contact_number, gender, message)
VALUES 
('$first_name', '$middle_name', '$last_name', '$admission_no', '$email', '$additional_email', '$address', '$username_f', '$password_f', '$contact_number', '$gender', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form Submitted Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
