<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name   = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email       = isset($_POST['email']) ? trim($_POST['email']) : '';
    $hospital_id = isset($_POST['hospital_id']) ? intval($_POST['hospital_id']) : 0;
    $visit_date  = isset($_POST['visit_date']) ? trim($_POST['visit_date']) : '';

    // Simple validation
    if(empty($full_name) || empty($email) || empty($hospital_id) || empty($visit_date)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO appointments (full_name, email, hospital_id, visit_date, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssis", $full_name, $email, $hospital_id, $visit_date);

        if($stmt->execute()){
            echo "<script>alert('Appointment booked successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.'); window.history.back();</script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>  