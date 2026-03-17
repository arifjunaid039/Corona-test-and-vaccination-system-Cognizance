<?php
require 'db.php';

// Check if admin is logged in (assuming you have admin session)
session_start();
if(!isset($_SESSION['admin'])) {
    echo "<script>alert('Please login as admin first!'); window.location='admin.php';</script>";
    exit();
}

// Get doctor ID and status from GET
if(isset($_GET['id']) && isset($_GET['status'])) {
    $id = intval($_GET['id']); // sanitize input
    $status = $_GET['status'];

    // Only allow 'verified' or 'rejected'
    if($status !== 'verified' && $status !== 'rejected') {
        echo "<script>alert('Invalid status!'); window.history.back();</script>";
        exit();
    }

    // Update the doctor status
    $sql = "UPDATE doctor_details SET verified_status='$status', status='$status' WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Doctor has been $status successfully!'); window.location='pending_doctors.php';</script>";
        exit();
    } else {
        echo "<script>alert('Something went wrong!'); window.history.back();</script>";
        exit();
    }

} else {
    echo "<script>alert('Invalid request!'); window.history.back();</script>";
    exit();
}
?>