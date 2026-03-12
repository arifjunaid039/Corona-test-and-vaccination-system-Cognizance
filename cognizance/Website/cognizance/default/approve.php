<?php
session_start();
require 'db.php';

// Sirf admin hi access kar sake
if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

// Get hospital ID from URL
if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    // Update status to 'approved'
    $sql = "UPDATE hospitals SET status='approved' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Hospital approved successfully!'); window.location='admin-dashboard.php';</script>";
    } else {
        echo "<script>alert('Database Error: ".mysqli_error($conn)."'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid hospital ID'); window.history.back();</script>";
}
?>
