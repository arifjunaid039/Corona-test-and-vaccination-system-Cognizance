<?php
require 'db.php';
require 'admin_sidebar.php';
$pending_doctors = mysqli_query($conn,"SELECT * FROM doctor_details WHERE status='pending'");
?>

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
<style>

table{
    background:white;
}
h2{
    margin-top:40px;
}

body{
    background:#f4f6f9;
}

.dashboard-title{
    font-weight:700;
    margin:30px 0;
}

.dashboard-card{
    background:white;
    padding:25px;
    margin: 210px 10px 210px 210px;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

.dashboard-card h2{
    font-size:22px;
    font-weight:600;
    margin-bottom:20px;
}

.table{
    margin-bottom:0;
}

.table thead{
    background:#0d6efd;
    color:white;
}

.table td, .table th{
    vertical-align:middle;
}

.dashboard-title{
    font-weight:700;
    font-size:36px;
    text-align:center;
    color:#2c3e50;
    margin-bottom:40px;
}

.dashboard-card h2{
    font-size:24px;
    font-weight:600;
    color:#34495e;
    border-left:5px solid #0d6efd;
    padding-left:10px;
}

.table th{
    font-size:15px;
    letter-spacing:0.5px;
}

.table td{
    font-size:14px;
    color:#444;
}

.btn{
    font-size:13px;
    font-weight:500;
}

.dashboard-card{
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

.top-cards{
display:flex;
flex-wrap:wrap;
justify-content:space-between;
}

.top-cards .card-box{
width:19%;
}

@media(max-width:992px){
.top-cards .card-box{
width:48%;
margin-bottom:15px;
}
}

@media(max-width:576px){
.top-cards .card-box{
width:100%;
}
}

</style>
<!-- Pending Doctors -->
<div class="container">
    <h1 class="dashboard-title">Pending Doctors</h1>

    <div class="dashboard-card">
        <h2>Pending Doctors</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Degree</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($pending_doctors && mysqli_num_rows($pending_doctors) > 0){
                    while($row = mysqli_fetch_assoc($pending_doctors)){
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['full_name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['degree'] ?? '') ?></td>
                    <td>
                        <a class="btn btn-success btn-sm px-3" href="approve_doctor.php?id=<?= $row['id'] ?>">Approve</a>
                        <a class="btn btn-danger btn-sm px-3" href="reject_doctor.php?id=<?= $row['id'] ?>">Reject</a>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No pending doctors found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>