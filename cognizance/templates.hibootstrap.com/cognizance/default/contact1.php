<?php
require 'db.php';
session_start();

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone   = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if(empty($name) || empty($email) || empty($phone) || empty($message)) {
        $error = "All fields are required!";
    } else {

        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone_number, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $message);

        if($stmt->execute()){
            header("Location: thank-you.php");
            exit;
        } else {
            $error = "Something went wrong. Please try again.";
        }

        $stmt->close();
    }
}

$conn->close();
?>