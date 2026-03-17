<?php
require "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize input
    $full_name   = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);
    $phone       = mysqli_real_escape_string($conn, $_POST['phone']);
    $hospital_id = mysqli_real_escape_string($conn, $_POST['hospital_id']);
    $password    = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $degree      = mysqli_real_escape_string($conn, $_POST['degree']);
    $address     = mysqli_real_escape_string($conn, $_POST['address']);
    $university_name = mysqli_real_escape_string($conn, $_POST['university_name']);
    $graduation_year = mysqli_real_escape_string($conn, $_POST['graduation_year']);
    $pmc_number      = mysqli_real_escape_string($conn, $_POST['pmc_number']);


    /* ---------------- CV Upload ---------------- */

    if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0){

        $cv_name = time().'_'.basename($_FILES['cv']['name']);
        $cv_tmp  = $_FILES['cv']['tmp_name'];
        $cv_folder = "uploads/cv/".$cv_name;

        if(!is_dir('uploads/cv')){
            mkdir('uploads/cv',0777,true);
        }

        move_uploaded_file($cv_tmp,$cv_folder);

    } else {
        $cv_name = '';
    }

    /* ---------------- Photo Upload ---------------- */

    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){

        $photo_name = time().'_'.basename($_FILES['photo']['name']);
        $photo_tmp  = $_FILES['photo']['tmp_name'];
        $photo_folder = "uploads/doctors/".$photo_name;

        if(!is_dir('uploads/doctors')){
            mkdir('uploads/doctors',0777,true);
        }

        move_uploaded_file($photo_tmp,$photo_folder);

    } else {
        $photo_name = '';
    }

    /* ---------------- Details Photo ---------------- */
if(isset($_FILES['details_photo']) && $_FILES['details_photo']['error'] == 0){
    $details_photo_name = time().'_'.basename($_FILES['details_photo']['name']);
    $tmp  = $_FILES['details_photo']['tmp_name'];
    if(!is_dir('uploads/doctor_details')) mkdir('uploads/doctor_details',0777,true);
    move_uploaded_file($tmp, "uploads/doctor_details/$details_photo_name");
} else {
    $details_photo_name = '';
}

    
// Email check remains
$check = mysqli_query($conn,"SELECT * FROM doctor_details WHERE email='$email' OR pmc_number='$pmc_number'");

if(mysqli_num_rows($check) > 0){
    echo "<script>alert('Email or PMC Number already registered.'); window.history.back();</script>";
    exit();
}

$sql = "INSERT INTO doctor_details (
            full_name,
            email,
            pmc_number,
            university_name,
            graduation_year,
            phone,
            password,
            degree,
            cv,
            photo,
            address,
            status,
            hospital_id,
            verified_status,
            details
        ) VALUES (
            '$full_name',
            '$email',
            '$pmc_number',
            '$university_name',
            '$graduation_year',
            '$phone',
            '$password',
            '$degree',
            '$cv_name',
            '$photo_name',
            '$address',
            'pending    ',
            '$hospital_id',
            '$verified_status',
            '$details_photo_name'
        )";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('We have sent your request to admin!'); window.location.href='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Something went wrong.'); window.history.back();</script>";
        exit();
    }

}
?>
