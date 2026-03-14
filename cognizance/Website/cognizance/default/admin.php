<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cognizance - Medical Health & Corona Treatment | Admin</title>

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

        <link rel="icon" type="image/png" href="assets/img/favicon.png">

<style>
/* Extra styling for admin login box */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(120deg, #e3e4e6,#007bff);
    min-height: 100vh;
    margin: 0;
    padding: 0;
    margin-top:10px;
}

.login-box {
    background: #bee6ed;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    width: 350px;
    text-align: center;
}

.login-box h2 {
    color: #8d5835;
    font-weight: 600;
    margin-bottom: 25px;
}

.login-box input[type=text],
.login-box input[type=password] {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: all 0.3s ease;
}

.login-box input:focus {
    border-color: #2d84e2;
    box-shadow: 0 0 5px #007bff;
    outline: none;
}

.login-box button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    border: none;
    border-radius: 8px;
    background: #007bff;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.login-box button:hover {
    background: #0056b3;
}

.login-box p {
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

.login-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
}

</style>
</head>
<body>
    <?php
        require 'db.php';
        require 'header.php';
        ?>


<div class="login-wrapper">
<div class="login-box">
    <h2>Admin Login</h2>
    <form action="admin1.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <p>From Cognizance Admin Panel</p>
</div>
</div>
<br>
<?php
require 'footer.php';
?>

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
</body>
</html>
