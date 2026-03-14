<?php
session_start();
require 'db.php'; // ✅ Ensure $conn is defined here

if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

// Get doctor ID from URL
if(!isset($_GET['id'])){
    die("Doctor ID missing");
}

$doctor_id = intval($_GET['id']); // Safe int

// Fetch doctor info
$stmt = $conn->prepare("SELECT * FROM doctor_details WHERE id=?");
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 0){
    die("Doctor not found");
}

$doctor = $result->fetch_assoc();

// Handle form submission
if(isset($_POST['update'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE doctor_details SET full_name=?, email=?, phone=?, degree=?, status=? WHERE id=?");
    $stmt->bind_param("sssssi", $name, $email, $phone, $degree, $status, $doctor_id);
    $stmt->execute();

    header("Location: admin-dashboard.php"); // Back to dashboard
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Doctor</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h2>Edit Doctor</h2>

<form method="post">
    <div class="mb-3">
        <label>Full Name</label>
        <input type="text" name="full_name" class="form-control" value="<?= htmlspecialchars($doctor['full_name']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($doctor['email']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($doctor['phone']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Specialization / Degree</label>
        <input type="text" name="degree" class="form-control" value="<?= htmlspecialchars($doctor['degree']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pending" <?= $doctor['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
            <option value="approved" <?= $doctor['status'] == 'approved' ? 'selected' : '' ?>>Approved</option>
            <option value="rejected" <?= $doctor['status'] == 'rejected' ? 'selected' : '' ?>>Rejected</option>
        </select>
    </div>
    <button type="submit" name="update" class="btn btn-primary">Update Doctor</button>
    <a href="admin-dashboard.php" class="btn btn-secondary">Cancel</a>
</form>
</div>
</body>
</html>