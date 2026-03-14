<?php
require 'db.php';
require 'admin_sidebar.php';
$appointments = mysqli_query($conn,"SELECT * FROM appointments ORDER BY visit_date ASC");
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

<br>
<div class="container">
<div class="dashboard-card">

<h2>Order Items</h2>

<?php
$order_items = mysqli_query($conn,"SELECT * FROM order_items ORDER BY created_at ASC");
?>

<table class="table table-bordered table-hover">
    <thead>
<tr>
<th>ID</th>
<th>Order ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Created At</th>
</tr>
</thead>
<tbody>
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
</tbody>
</table>
</div>
<br>
</div>
<br>