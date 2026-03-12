<?php
require 'db.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name       = trim($_POST['full_name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $Phone      = trim($_POST['phone'] ?? '');
    $help_type  = trim($_POST['help_type'] ?? '');
    $visit_date = trim($_POST['visit_date'] ?? '');
    $message    = trim($_POST['message'] ?? '');

    // Validation
    if(empty($name) || empty($email) || empty($visit_date) || empty($help_type) || empty($Phone) || empty($message)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit();
    }

    // Insert query
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone_number, help_type, visit_date, message) VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssss", $name, $email, $Phone, $help_type, $visit_date, $message);

$stmt->execute();


    if($stmt->execute()){
        echo "<script>alert('Message sent successfully!'); window.location='thank-you.php';</script>";
        exit();
    } else {
        echo "<script>alert('Something went wrong. Please try again.'); window.history.back();</script>";
        exit();
    }

    $stmt->close();
}

$conn->close();
?>