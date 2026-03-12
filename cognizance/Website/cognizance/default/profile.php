<?php
session_start();
require 'db.php';

// Check if patient is logged in
if(!isset($_SESSION['patient'])){
    header("Location: login.php");
    exit();
}

// Correctly get patient ID
$patient_id = is_array($_SESSION['patient']) ? $_SESSION['patient']['id'] : $_SESSION['patient'];

// Handle profile update
if(isset($_POST['update_profile'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    if(!empty($password)){
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE patients SET full_name=?, email=?, phone=?, address=?, password=? WHERE id=?");
        $stmt->bind_param("sssssi", $full_name, $email, $phone, $address, $password_hash, $patient_id);
    } else {
        $stmt = $conn->prepare("UPDATE patients SET full_name=?, email=?, phone=?, address=? WHERE id=?");
        $stmt->bind_param("ssssi", $full_name, $email, $phone, $address, $patient_id);
    }

    $stmt->execute();
    header("Location: profile.php?updated=1");
    exit();
}

// Handle account deletion
if(isset($_POST['delete_account'])){
    $stmt = $conn->prepare("DELETE FROM patients WHERE id=?");
    $stmt->bind_param("i", $patient_id);
    $stmt->execute();

    session_destroy();
    echo "<script>
        alert('Account Deleted Successfully');
        window.location='index.php';
    </script>";
    exit();
}

// Fetch patient info to display in form
$stmt = $conn->prepare("SELECT full_name,email,phone,address FROM patients WHERE id=?");
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();
$patient = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Profile</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background:#f0f2f5;">

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

<?php require 'header.php'; ?>

<div class="container mt-5" style="max-width:600px;background:white;padding:30px;border-radius:10px">

<?php if(isset($_GET['updated'])){ ?>
<div class="alert alert-success text-center">
Profile Updated Successfully
</div>
<?php } ?>

<h3 class="text-center mb-4">Manage Profile</h3>

<form action="update-profile.php" method="POST">
    <input class="form-control mb-3" type="text" name="full_name" placeholder="Enter your name" value="<?= htmlspecialchars($patient['full_name'] ?? '') ?>" required>
    <input class="form-control mb-3" type="email" name="email" placeholder="Enter your email" value="<?= htmlspecialchars($patient['email'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="phone" placeholder="Enter your phone number" value="<?= htmlspecialchars($patient['phone'] ?? '') ?>" required>
    <input class="form-control mb-3" type="text" name="address" placeholder="Enter your address" value="<?= htmlspecialchars($patient['address'] ?? '') ?>" required>
    <input class="form-control mb-3" type="password" name="password" placeholder="New Password (optional)">

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary me-2">Update Profile</button>
        <a href="delete.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account?');">Delete Profile</a>
    </div>
</form>
</div>
<br>
<?php require 'footer.php'; ?>

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
</body>
</html>