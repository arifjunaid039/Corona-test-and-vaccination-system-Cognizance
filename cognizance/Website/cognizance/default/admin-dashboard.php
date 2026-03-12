<?php
session_start();
require 'db.php';
require 'header.php';


if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

$pending_hospitals = mysqli_query($conn,"SELECT * FROM hospitals WHERE status='pending'");
$pending_doctors = mysqli_query($conn,"SELECT * FROM doctor_details WHERE status='pending'");
$appointments = mysqli_query($conn,"SELECT * FROM appointments ORDER BY visit_date DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<style>

table{
    background:white;
}
h2{
    margin-top:40px;
}
</style>

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
<body>

<h1>Admin Dashboard</h1>
<br>
<!-- Pending Hospitals -->
<h2>Pending Hospitals</h2>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($pending_hospitals)){ ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['hospital_name']) ?></td>
<td><?= htmlspecialchars($row['email']) ?></td>
<td>
<a class="btn btn-success btn-sm" href="approve.php?id=<?= $row['id'] ?>">Approve</a>
<a class="btn btn-danger btn-sm" href="reject.php?id=<?= $row['id'] ?>">Reject</a>
</td>
</tr>
<?php } ?>

</table>
<br>

<!-- Pending Doctors -->
<h2>Pending Doctors</h2>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($pending_doctors)){ ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['full_name']) ?></td>
<td><?= htmlspecialchars($row['email']) ?></td>
<td>
<a class="btn btn-success btn-sm" href="approve_doctor.php?id=<?= $row['id'] ?>">Approve</a>
<a class="btn btn-danger btn-sm" href="reject_doctor.php?id=<?= $row['id'] ?>">Reject</a>
</td>
</tr>
<?php } ?>

</table>
<br>

<!-- Appointments -->
<h2>Appointments</h2>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Patient Name</th>
<th>Email</th>
<th>Hospital ID</th>
<th>Visit Date</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($appointments) > 0){
while($row = mysqli_fetch_assoc($appointments)){
?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['full_name']) ?></td>
<td><?= htmlspecialchars($row['email']) ?></td>
<td><?= $row['hospital_id'] ?></td>
<td><?= $row['visit_date'] ?></td>
<td><?= $row['created_at'] ?></td>
</tr>

<?php
}
}else{
echo "<tr><td colspan='6'>No Appointments Found</td></tr>";
}
?>

</table>
<br>
<h2>Contact Messages</h2>

<?php
$messages = mysqli_query($conn,"SELECT * FROM contact_messages ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php
if(mysqli_num_rows($messages) > 0){
    while($row = mysqli_fetch_assoc($messages)){
    ?>
    <tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['phone_number'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['message'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='6'>No Messages</td></tr>";
}
?>
</table>
<br>
<h2>Patients</h2>

<?php
$patients = mysqli_query($conn,"SELECT * FROM patients ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Hospital ID</th>
<th>Address</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($patients) > 0){
    while($row = mysqli_fetch_assoc($patients)){
    ?>
    <tr>
    <td><?= htmlspecialchars($row['id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['full_name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['hospital_id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['address'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='7'>No Patients Found</td></tr>";
}
?>

</table>
<br>
<h2>Hospitals</h2>

<?php
$hospitals = mysqli_query($conn,"SELECT * FROM hospitals ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Status</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($hospitals) > 0){
    while($row = mysqli_fetch_assoc($hospitals)){
    ?>
    <tr>
    <td><?= htmlspecialchars($row['id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['hospital_name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['address'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['status'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='7'>No Hospitals Found</td></tr>";
}
?>

</table>
<br>
<h2>Doctors</h2>

<?php
$doctors = mysqli_query($conn,"SELECT * FROM doctor_details ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Specialization</th>
<th>Hospital ID</th>
<th>Status</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($doctors) > 0){
    while($row = mysqli_fetch_assoc($doctors)){
    ?>
    <tr>
    <td><?= htmlspecialchars($row['id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['full_name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['phone'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['degree'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['hospital_id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['status'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='8' class='text-center'>No Doctors Found</td></tr>";
}
?>

</table>
<br>
<h2>Orders</h2>

<?php
$orders = mysqli_query($conn,"SELECT * FROM orders ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Customer Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Total Amount</th>
<th>Status</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($orders) > 0){
    while($row = mysqli_fetch_assoc($orders)){
    ?>
    <tr>
    <td><?= htmlspecialchars($row['id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['customer_name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['customer_email'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['customer_phone'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['customer_address'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['total_amount'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['order_status'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='8' class='text-center'>No Orders Found</td></tr>";
}
?>

</table>
<br>
<h2>Order Items</h2>

<?php
$order_items = mysqli_query($conn,"SELECT * FROM order_items ORDER BY created_at DESC");
?>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Order ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Created At</th>
</tr>

<?php
if(mysqli_num_rows($order_items) > 0){
    while($row = mysqli_fetch_assoc($order_items)){
    ?>
    <tr>
    <td><?= htmlspecialchars($row['id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['order_id'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['product_name'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['price'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['quantity'] ?? '') ?></td>
    <td><?= htmlspecialchars($row['created_at'] ?? '') ?></td>
    </tr>
    <?php
    }
}else{
    echo "<tr><td colspan='6' class='text-center'>No Order Items Found</td></tr>";
}
?>

</table>
<br>
<!-- Links of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
<?php
       require 'footer.php';
       ?>
</body>
</html>