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

    // File upload for hospital detail file
    $file_name = $_FILES['hospital_file']['name'];
    $file_tmp  = $_FILES['hospital_file']['tmp_name'];
    $file_size = $_FILES['hospital_file']['size'];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed   = array('pdf','doc','docx');

    if(!in_array($file_ext, $allowed)){
        echo "<script>alert('Only PDF, DOC, DOCX files allowed!'); window.history.back();</script>";
        exit;
    }

    if($file_size > 5000000){
        echo "<script>alert('File size must be less than 5MB!'); window.history.back();</script>";
        exit;
    }

    $new_file_name = time() . "_" . $file_name;
    $upload_path = "uploads/" . $new_file_name;

    if(!move_uploaded_file($file_tmp, $upload_path)){
        die("Detail file upload failed!");
    }

    // File upload for hospital image
    $img_name = $_FILES['hospital_image']['name'];
    $img_tmp  = $_FILES['hospital_image']['tmp_name'];
    $img_size = $_FILES['hospital_image']['size'];
    $img_ext  = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    $img_allowed = array('jpg','jpeg','png','gif');

    if(!in_array($img_ext, $img_allowed)){
        echo "<script>alert('Only JPG, PNG, GIF files allowed for image!'); window.history.back();</script>";
        exit;
    }

    if($img_size > 5000000){
        echo "<script>alert('Image size must be less than 5MB!'); window.history.back();</script>";
        exit;
    }

    $new_img_name = time() . "_img." . $img_ext;
    $img_upload_path = "uploads/" . $new_img_name;

    if(!move_uploaded_file($img_tmp, $img_upload_path)){
        die("Image upload failed!");
    }

    // Check duplicate email
    $check = mysqli_query($conn, "SELECT id FROM hospitals WHERE email='$email'");
    if(mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already registered!'); window.history.back();</script>";
        exit;
    }

    // Insert into DB
    $sql = "INSERT INTO hospitals 
            (hospital_name, email, password, phone, address, details, hospital_file, hospital_image, status, created_at)
            VALUES 
            ('$hospital_name', '$email', '$password', '$phone', '$address', '$details', '$new_file_name', '$new_img_name', 'pending', NOW())";

    if(mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Request sent successfully with file and image upload!');
                window.location.href='hospital.php';
              </script>";
        exit;
    } else {
        echo "<script>alert('Database Error: ".mysqli_error($conn)."'); window.history.back();</script>";
        exit;
    }
}
?>