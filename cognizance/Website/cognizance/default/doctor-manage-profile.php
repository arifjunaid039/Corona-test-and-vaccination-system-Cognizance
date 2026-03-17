<?php
session_start();
require 'db.php';

// Ensure doctor is logged in
if(!isset($_SESSION['doctor'])){
    header("Location: doctor-login.php");
    exit();
}

$doctor_id = $_SESSION['doctor'];

// Fetch existing doctor info
$stmt = $conn->prepare("SELECT full_name, email, phone, address, photo FROM doctor_details WHERE id=?");
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();
$doctor = $result->fetch_assoc();

// Handle profile update
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])){
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $password = $_POST['password'];

    $photo = $doctor['photo']; // existing photo

    // Handle photo upload
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0){
        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $new_name = 'doctor_'.$doctor_id.'_'.time().'.'.$ext;
        move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$new_name);
        $photo = $new_name;
    }

    if(!empty($password)){
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE doctor_details SET full_name=?, email=?, phone=?, address=?, password=?, photo=? WHERE id=?");
        $stmt->bind_param("ssssssi", $full_name, $email, $phone, $address, $password_hash, $photo, $doctor_id);
    } else {
        $stmt = $conn->prepare("UPDATE doctor_details SET full_name=?, email=?, phone=?, address=?, photo=? WHERE id=?");
        $stmt->bind_param("sssssi", $full_name, $email, $phone, $address, $photo, $doctor_id);
    }

    $stmt->execute();
    header("Location: doctor-manage-profile.php?updated=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Manage Profile</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/datatables.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
<body style="background:#f0f2f5;">
<?php require 'header.php'; ?>

<div class="container mt-5" style="max-width:600px;background:white;padding:30px;border-radius:10px">

<?php if(isset($_GET['updated'])): ?>
<div class="alert alert-success text-center">
Profile Updated Successfully
</div>
<?php endif; ?>

<h3 class="text-center mb-4">Manage Profile</h3>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group mb-3 text-center">
        <label>Profile Picture</label><br>
        <img src="<?= !empty($doctor['photo']) ? 'uploads/'.$doctor['photo'] : 'assets/img/no-profile.png' ?>" 
             width="120" class="rounded-circle mb-2">
        <input class="form-control mt-2" type="file" name="photo">
    </div>

    <input class="form-control mb-3" type="text" name="full_name" placeholder="Enter your name" value="<?= htmlspecialchars($doctor['full_name'] ?? '') ?>" required>
    <input class="form-control mb-3" type="email" name="email" placeholder="Enter your email" value="<?= htmlspecialchars($doctor['email'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="phone" placeholder="Enter your phone number" value="<?= htmlspecialchars($doctor['phone'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="address" placeholder="Enter your address" value="<?= htmlspecialchars($doctor['address'] ?? '') ?>" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="New Password (optional)">

    <div class="text-center mt-3">
        <button type="submit" name="update_profile" class="btn btn-primary me-2">Update Profile</button>
        <a href="delete-doctor.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account?');">Delete Profile</a>
    </div>
</form>
</div>
<br>

<?php require 'footer.php'; ?>
</body>
</html>