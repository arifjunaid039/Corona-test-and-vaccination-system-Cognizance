<?php
require 'db.php';

if(isset($_POST['register'])) {
    if(!$conn){
        die("Database connection failed.");
    }

    $hospital_name = mysqli_real_escape_string($conn, $_POST['hospital_name']);
    $email         = mysqli_real_escape_string($conn, $_POST['email']);
    $password      = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone         = mysqli_real_escape_string($conn, $_POST['phone']);
    $address       = mysqli_real_escape_string($conn, $_POST['address']);
    $details       = mysqli_real_escape_string($conn, $_POST['details']);

    // File upload
    $file_name = $_FILES['hospital_file']['name'];
    $file_tmp  = $_FILES['hospital_file']['tmp_name'];
    $file_size = $_FILES['hospital_file']['size'];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed   = array('pdf','doc','docx');

    if(!in_array($file_ext, $allowed)){
        echo "<script>alert('Only PDF, DOC, DOCX files allowed!'); window.history.back();</script>";
        exit;
    }

    if($file_size > 5000000){ // 5MB limit
        echo "<script>alert('File size must be less than 5MB!'); window.history.back();</script>";
        exit;
    }

    $new_file_name = time() . "_" . $file_name;
    $upload_path = "uploads/" . $new_file_name;

    if(!move_uploaded_file($file_tmp, $upload_path)){
        die("File upload failed! Check uploads folder permissions.");
    }

    // Check duplicate email
    $check = mysqli_query($conn, "SELECT id FROM hospitals WHERE email='$email'");
    if(mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already registered!'); window.history.back();</script>";
        exit;
    }

    // Insert
    $sql = "INSERT INTO hospitals 
            (hospital_name, email, password, phone, address, details, hospital_file, status, created_at)
            VALUES 
            ('$hospital_name', '$email', '$password', '$phone', '$address', '$details', '$new_file_name', 'pending', NOW())";

    if(mysqli_query($conn, $sql)) {
        // ✅ Alert show and redirect
        echo "<script>
                alert('Request sent successfully with file upload!');
                window.location.href='hospital.php';
              </script>";
        exit;
    } else {
        echo "<script>alert('Database Error: ".mysqli_error($conn)."'); window.history.back();</script>";
        exit;
    }
}
?>