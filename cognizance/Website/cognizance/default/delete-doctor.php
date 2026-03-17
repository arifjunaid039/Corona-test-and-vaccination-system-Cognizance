<?php
session_start();
require 'db.php';

// Ensure doctor is logged in
if(!isset($_SESSION['doctor'])){
    header("Location: doctor-login.php");
    exit();
}

$doctor_id = $_SESSION['doctor'];

// Only delete if form is submitted
if(isset($_POST['delete_account'])){
    // Use the correct table name; safer with underscores
    $stmt = $conn->prepare("DELETE FROM doctor_details WHERE id=?");
    $stmt->bind_param("i", $doctor_id);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        // Destroy session and redirect
        session_destroy();
        echo "<script>
            alert('Doctor Account Deleted Successfully');
            window.location='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Failed to delete account. Please try again.');
            window.location='doctor-profile.php';
        </script>";
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Doctor Account</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body { background: #f8f9fa; }
        .container { margin-top: 100px; max-width: 500px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .btn-group { display: flex; justify-content: center; gap: 20px; margin-top: 20px; }
        .btn { min-width: 150px; }
    </style>
</head>
<body>
<div class="container text-center">
    <h2 class="mb-3">Delete Your Doctor Account</h2>
    <p class="text-danger">Warning: This action cannot be undone!</p>

    <form method="post" onsubmit="return confirm('Are you sure you want to delete your account permanently?');">
        <div class="btn-group">
            <button type="submit" name="delete_account" class="btn btn-danger btn-lg">Delete Account</button>
            <a href="doctor-profile.php" class="btn btn-secondary btn-lg">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>