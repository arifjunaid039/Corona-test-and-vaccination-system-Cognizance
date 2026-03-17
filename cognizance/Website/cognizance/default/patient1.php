<?php
session_start();
require "db.php";

// Inputs safely
$full_name   = trim($_POST['full_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone       = trim($_POST['phone'] ?? '');
$password    = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$address     = trim($_POST['address'] ?? '');

// Basic validation
if (!$full_name || !$email || !$phone || !$password) {
    echo "<script>alert('Please fill all required fields!'); window.history.back();</script>";
    exit();
}

// Email check (safe prepared statement)
$stmt_check = $conn->prepare("SELECT id FROM patients WHERE email=?");
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();
if($stmt_check->num_rows > 0){
    echo "<script>alert('Email already registered. Please login.'); window.location.href='patient.php';</script>";
    exit();
}

// Handle profile picture upload
$profile_pic = '';
if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === 0){
    $ext = pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
    $new_name = 'patient_'.time().'.'.$ext;
    $upload_dir = 'uploads/';
    if(!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
    if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_dir.$new_name)){
        $profile_pic = $new_name;
    }
}

// Insert patient
$stmt = $conn->prepare("INSERT INTO patients (full_name,email,phone,password,address,photo) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $full_name, $email, $phone, $password, $address, $profile_pic);

if($stmt->execute()){
    $patient_id = $stmt->insert_id;

    // Set session
    $_SESSION['patient'] = [
        'id' => $patient_id,
        'email' => $email,
        'name' => $full_name,
        'profile_pic' => $profile_pic
    ];

    echo "<script>alert('Registration Successful'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Something went wrong. Try again.'); window.history.back();</script>";
}
?>