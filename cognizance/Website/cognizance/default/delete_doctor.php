<?php
session_start();
require 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit();
}

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM doctor_details WHERE id='$id'");

header("Location: admin-dashboard.php");
?>