<?php
session_start();
require 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

if(isset($_GET['id'])){
    $doctor_id = intval($_GET['id']);
    $update = mysqli_query($conn, "UPDATE doctor_details SET status='rejected' WHERE id=$doctor_id");

    if($update){
        header("Location: admin-dashboard");
        exit;
    } else {
        echo "Error: Could not reject doctor.";
    }
} else {
    echo "No doctor ID provided.";
}
?>