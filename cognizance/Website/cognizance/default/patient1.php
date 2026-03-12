<?php
require "db.php";
session_start();

// Inputs safely lena
$full_name   = trim($_POST['full_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$password    = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$hospital_id = isset($_POST['hospital_id']) && $_POST['hospital_id'] !== '' ? intval($_POST['hospital_id']) : null;
$address     = trim($_POST['address'] ?? '');

// Basic validation
if (!$full_name || !$email || !$phone || !$password) {
    echo "<script>alert('Please fill in all required fields!'); window.history.back();</script>";
    exit();
}

// Email check
$check = mysqli_query($conn, "SELECT * FROM patients WHERE email='$email'");
if(mysqli_num_rows($check) > 0){
    echo "<script>
    alert('Email already registered. Please login.');
    window.location.href='patient.php';
    </script>";
    exit();
}

// Insert query, hospital_id safe
$sql = "INSERT INTO patients (full_name, email, phone, password, hospital_id, address)
        VALUES ('$full_name', '$email', '$phone', '$password', " . ($hospital_id ?? "NULL") . ", '$address')";

// Execute
if (mysqli_query($conn, $sql)) {
    $_SESSION['patient'] = $email; 
    $_SESSION['patient_name'] = $full_name;

    echo "<script>
    alert('Registration Successful');
    window.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Something went wrong. Please try again.');
    window.history.back();
    </script>";
}
// Login successful hone ke baad
$_SESSION['patient'] = [
    'id' => $patient_row['id'], // database se id
    'email' => $patient_row['email']
];
?>