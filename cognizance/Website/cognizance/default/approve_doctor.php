<?php
session_start();
require 'db.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

// Check if doctor ID is provided
if(isset($_GET['id'])){
    $doctor_id = intval($_GET['id']); // sanitize input

    // Update doctor status to approved
    $update = mysqli_query($conn, "UPDATE doctor_details SET status='approved' WHERE id=$doctor_id");

    if($update){
        // Redirect back to admin dashboard
        header("Location: admin-dashboard.php");
        exit;
    } else {
        echo "Error: Could not approve doctor.";
    }
} else {
    echo "No doctor ID provided.";
}
?>