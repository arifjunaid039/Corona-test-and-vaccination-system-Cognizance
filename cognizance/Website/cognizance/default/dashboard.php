<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Doctor Dashboard</title>

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
body{
    font-family: 'Poppins', sans-serif;
    background:#f4f6f9;
}

.dashboard-header{
    background: #c3ccdb;
    color:white;
    padding:15px;
    font-size:22px;
    text-align:center;
    position: relative;
}

.logout{
    position: absolute;
    right: 15px;
    top: 15px;
    color:white;
    text-decoration:none;
    font-size:14px;
}

.container-box{
    width:500px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}

select, button{
    width:100%;
    padding:10px;
    margin-top:10px;
    border-radius:5px;
    border:1px solid #ccc;
    font-size:14px;
}

button{
    background:#28a745;
    color:white;
    border:none;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#218838;
}

.doctor{
    margin-top:15px;
    background:#f1f1f1;
    padding:12px;
    border-radius:5px;
    font-size:15px;
}

.footer-area a:hover{
    text-decoration:underline;
}

.footer-widget h3{
    margin-bottom:15px;
    font-size:18px;
}

.footer-widget p{
    font-size:14px;
    line-height:1.6;
}
</style>
</head>

<body>

<div class="dashboard-header">
Doctor Dashboard
</div>

<?php
 require 'header.php'; 
 ?>

<div class="container-box">
    <form method="post">
        <select name="degree" required>
            <option value="">Select Specialization</option>
            <option value="Cardiologist">Cardiologist</option>
            <option value="Dermatologist">Dermatologist</option>
            <option value="Neurologist">Neurologist</option>
            <option value="Pediatrician">Pediatrician</option>
            <option value="General Practitioner">General Practitioner</option>
        </select>
        <button name="search">Find Doctor</button>
    </form>
</div>

<?php
if(isset($_POST['search'])) {
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $sql = "SELECT * FROM doctor_details WHERE degree='$degree' AND status='approved'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<div class='container my-4'>"; // main page container
        echo "<div class='row'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col-lg-4 col-md-6 mb-4'>";
            echo "<div class='doctor card p-3 h-100'>";
            echo "<h5>".$row['full_name']."</h5>";
            echo "<p><b>Specialization:</b> ".$row['degree']."</p>";
            echo "<p><b>Email:</b> ".$row['email']."</p>";
            echo "<p><b>Phone:</b> ".$row['phone']."</p>";
            echo "<p><b>Address:</b> ".$row['address']."</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>"; // end main container
    } else {
        echo "<div class='container my-4'><div class='doctor text-center'>No doctor found</div></div>";
    }
}
?>

<?php require "footer.php"; ?>
<script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
</body>
</html>