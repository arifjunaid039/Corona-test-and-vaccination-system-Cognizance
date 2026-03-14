<?php
require 'db.php';
?>

<style>
    /* Sidebar */
.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:230px;
    height:100%;
    background:#569ca6;
    padding-top:20px;
}

.sidebar h3{
    color:white;
    text-align:center;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:#ecf0f1;
    padding:12px 20px;
    text-decoration:none;
    font-size:15px;
    transition:0.3s;
}

.sidebar a:hover{
    background:#34495e;
    padding-left:25px;
}

/* Main Content */
.main-content{
    margin-left:240px;
    padding:20px;
}

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
</style>
<div class="sidebar">

<h3>Admin Panel</h3>

<a href="admin-dashboard.php">Dashboard</a>
<a href="pending_hospitals.php">Pending Hospitals</a>
<a href="pending_doctors.php">Pending Doctors</a>
<a href="pending_appointments.php">Appointments</a>
<a href="patient_admin.php">Patients</a>
<a href="contact_messages.php">Contact Messages</a>
<a href="hospitals.php">Hospitals</a>
<a href="doctor_admin.php">Doctors</a>
<a href="order_admin.php">Orders</a>
<a href="order_items.php">Order Items</a>

<a href="logout.php" style="color:#ff7675;">Logout</a>

</div>