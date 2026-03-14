<?php
session_start();
require 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit;
}

$total_hospitals = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM hospitals WHERE status='approved'"))['total'];
$total_doctors   = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM doctor_details WHERE status='approved'"))['total'];
$total_patients  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM patients"))['total'];
$total_appointment = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM appointments"))['total'];
$total_orders    = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM orders"))['total'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<style>
body{
    background:#f4f6f9;
}
.sidebar {
    position: fixed;
    width: 220px;  /* adjust your sidebar width */
    height: 100%;
    background:#343a40;
}
.main-content {
    margin-left: 220px; /* same as sidebar width */
    padding: 20px;
}
.dashboard-title{
    font-weight:700;
    font-size:36px;
    color:#2c3e50;
    margin-bottom:40px;
    text-align:center;
}
.top-cards{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
}
.top-cards .card-box{
    width:19%;
    margin-bottom:15px;
}
.dashboard-card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    text-align:center;
    transition:0.3s;
}
.dashboard-card:hover{
    transform:translateY(-4px);
    box-shadow:0 8px 25px rgba(0,0,0,0.12);
}
.dashboard-card h3{
    font-size:40px;
    font-weight:bold;
    color:#0d6efd;
}
.dashboard-card p{
    font-size:16px;
    margin-top:5px;
    color:#555;
}
@media(max-width:992px){
    .top-cards .card-box{width:48%;}
}
@media(max-width:576px){
    .top-cards .card-box{width:100%;}
}
.main-content{
    margin:210px 10px 210px 210px;
}
</style>
</head>
<body>

<?php require 'admin_sidebar.php'; ?>

<div class="main-content">
    <h1 class="dashboard-title">Admin Dashboard</h1>

    <div class="top-cards">
        <div class="card-box">
            <div class="dashboard-card">
                <h3><?= $total_hospitals ?></h3>
                <p>Total Hospitals</p>
            </div>
        </div>

        <div class="card-box">
            <div class="dashboard-card">
                <h3><?= $total_doctors ?></h3>
                <p>Total Doctors</p>
            </div>
        </div>

        <div class="card-box">
            <div class="dashboard-card">
                <h3><?= $total_patients ?></h3>
                <p>Total Patients</p>
            </div>
        </div>

        <div class="card-box">
            <div class="dashboard-card">
                <h3><?= $total_appointment ?></h3>
                <p>Appointments</p>
            </div>
        </div>

        <div class="card-box">
            <div class="dashboard-card">
                <h3><?= $total_orders ?></h3>
                <p>Total Orders</p>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>