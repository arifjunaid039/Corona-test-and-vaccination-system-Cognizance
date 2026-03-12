<?php
require "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize input
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
    $phone     = mysqli_real_escape_string($conn, $_POST['phone']);
    $password  = password_hash($_POST['password'], PASSWORD_BCRYPT); // secure hash
    $degree    = mysqli_real_escape_string($conn, $_POST['degree']);
    $address   = mysqli_real_escape_string($conn, $_POST['address']);

    // CV Upload
    if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0){
        $cv_name = time().'_'.basename($_FILES['cv']['name']);
        $cv_tmp  = $_FILES['cv']['tmp_name'];
        $cv_folder = "uploads/cv/".$cv_name;

        // Create folder if it doesn't exist
        if(!is_dir('uploads/cv')){
            mkdir('uploads/cv', 0777, true);
        }

        move_uploaded_file($cv_tmp, $cv_folder);
    } else {
        $cv_name = '';
    }

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM doctor_details WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Email already registered.'); window.history.back();</script>";
        exit();
    }

    // Insert into database
    $sql = "INSERT INTO doctor_details (full_name, email, phone, password, degree, cv, address)
        VALUES ('$full_name', '$email', '$phone', '$password', '$degree', '$cv_name', '$address')";
        
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('We have send your request to admin!'); window.location.href='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Something went wrong.'); window.history.back();</script>";
        exit();
    }
}
?>