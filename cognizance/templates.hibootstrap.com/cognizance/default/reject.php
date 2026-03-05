<?php
session_start();
include 'db.php';

// Sirf admin hi access kar sake
if(!isset($_SESSION['admin'])){
    header("Location: admin-login.php");
    exit;
}

// Get hospital ID from URL
if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    // Update status to 'rejected'
    $sql = "UPDATE hospitals SET status='rejected' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Hospital rejected successfully!'); window.location='admin-dashboard.php';</script>";
    } else {
        echo "<script>alert('Database Error: ".mysqli_error($conn)."'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid hospital ID'); window.history.back();</script>";
}
?>
