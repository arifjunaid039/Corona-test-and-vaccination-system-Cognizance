<?php
session_start();
require 'db.php';

if(!isset($_SESSION['patient'])){
    header("Location: login.php");
    exit();
}

$patient_id = is_array($_SESSION['patient']) ? $_SESSION['patient']['id'] : $_SESSION['patient'];

// Fetch patient info
$stmt = $conn->prepare("SELECT full_name, email, phone, address, photo FROM patients WHERE id=?");
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();
$patient = $result->fetch_assoc();

// Handle profile update
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $password = $_POST['password'];

    $photo = $patient['photo']; // default existing

    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0){
        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $new_name = 'patient_'.$patient_id.'_'.time().'.'.$ext;
        move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$new_name);
        $photo = $new_name;
    }

    if(!empty($password)){
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE patients SET full_name=?, email=?, phone=?, address=?, password=?, photo=? WHERE id=?");
        $stmt->bind_param("ssssssi", $full_name, $email, $phone, $address, $password_hash, $photo, $patient_id);
    } else {
        $stmt = $conn->prepare("UPDATE patients SET full_name=?, email=?, phone=?, address=?, photo=? WHERE id=?");
        $stmt->bind_param("sssssi", $full_name, $email, $phone, $address, $photo, $patient_id);
    }

    $stmt->execute();
    header("Location: profile.php?updated=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Profile</title>
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
        <img src="<?= !empty($patient['photo']) ? 'uploads/'.$patient['photo'] : 'assets/img/no-profile.png' ?>" 
             width="120" class="rounded-circle mb-2">
        <input class="form-control mt-2" type="file" name="photo">
    </div>
    <input class="form-control mb-3" type="text" name="full_name" placeholder="Enter your name" value="<?= htmlspecialchars($patient['full_name'] ?? '') ?>" required>
    <input class="form-control mb-3" type="email" name="email" placeholder="Enter your email" value="<?= htmlspecialchars($patient['email'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="phone" placeholder="Enter your phone number" value="<?= htmlspecialchars($patient['phone'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="address" placeholder="Enter your address" value="<?= htmlspecialchars($patient['address'] ?? '') ?>" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="New Password (optional)">

    <div class="text-center mt-3">
        <button type="submit" name="update_profile" class="btn btn-primary me-2">Update Profile</button>
        <a href="delete.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account?');">Delete Profile</a>
    </div>
</form>
</div>
<br>

<?php require 'footer.php'; ?>
</body>
</html>