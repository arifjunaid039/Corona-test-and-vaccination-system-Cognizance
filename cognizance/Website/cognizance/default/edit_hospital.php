<?php
session_start();
require 'db.php'; // ✅ ensure db.php me $conn define hai

if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

// Get hospital ID from URL
if(!isset($_GET['id'])){
    die("Hospital ID missing");
}

$hospital_id = intval($_GET['id']); // safe int

// Fetch hospital info
$stmt = $conn->prepare("SELECT * FROM hospitals WHERE id=?");
$stmt->bind_param("i", $hospital_id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 0){
    die("Hospital not found");
}

$hospital = $result->fetch_assoc();

// Handle form submission
if(isset($_POST['update'])){
    $name = $_POST['hospital_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("UPDATE hospitals SET hospital_name=?, email=?, phone=?, address=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $address, $hospital_id);
    $stmt->execute();

    header("Location: admin-dashboard.php"); // back to dashboard
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Hospital</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h2>Edit Hospital</h2>

<form method="post">
    <div class="mb-3">
        <label>Hospital Name</label>
        <input type="text" name="hospital_name" class="form-control" value="<?= htmlspecialchars($hospital['hospital_name']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($hospital['email']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($hospital['phone']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Address</label>
        <textarea name="address" class="form-control" required><?= htmlspecialchars($hospital['address']) ?></textarea>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update Hospital</button>
    <a href="admin_dashboard.php" class="btn btn-secondary">Cancel</a>
</form>
</div>
</body>
</html>