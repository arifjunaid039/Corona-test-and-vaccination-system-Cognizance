<?php
session_start();
require 'db.php';

if(!isset($_SESSION['patient'])){
    header("Location: login.php");
    exit();
}

// Only delete if the form is submitted
if(isset($_POST['delete_account'])){
    $patient_id = $_SESSION['patient'];

    // Prepare and execute deletion
    $stmt = $conn->prepare("DELETE FROM patients WHERE id=?");
    $stmt->bind_param("i",$patient_id);
    $stmt->execute();

    // Destroy session and redirect
    session_destroy();
    echo "<script>
        alert('Account Deleted Successfully');
        window.location='index.php';
    </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
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
    <h2 class="mb-3">Delete Your Account</h2>
    <p class="text-danger">Warning: This action cannot be undone!</p>

    <form method="post" onsubmit="return confirm('Are you sure you want to delete your account permanently?');">
        <div class="btn-group">
            <button type="submit" name="delete_account" class="btn btn-danger btn-lg">Delete Account</button>
            <a href="profile.php" class="btn btn-secondary btn-lg">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>