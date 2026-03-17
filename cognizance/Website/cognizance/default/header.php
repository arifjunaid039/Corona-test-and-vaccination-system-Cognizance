<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<style>
.navbar-area { background: #ffffff !important; position: relative !important; z-index: 9999; }
.navbar-light .navbar-nav .nav-link { color: #000000 !important; }
.navbar-light .navbar-nav .nav-link:hover { color: #007bff !important; }
.default-btn { background: #007bff !important; color: #fff !important; }
.navbar-nav .nav-item {
    margin-left: 0.2rem;
    margin-right: 0.2rem;
}

.navbar-nav .nav-link {
    padding: 0.2rem 0.72rem;
}

.others-option {
    margin-left: auto;
}

.navbar-nav .nav-item {
    margin-left: 0.2rem;
    margin-right: 0.2rem;
}

.navbar-nav .nav-item {
    margin: 0; /* remove extra margin */
}

.navbar-nav .nav-link {
    padding: 0.5rem 0.8rem; /* adjust horizontally */
    font-weight: 500;
}

.navbar-light .navbar-nav {
    align-items: center; /* vertical alignment */
}
/* Navbar link spacing */
.navbar-nav .nav-item {
    margin-left: 0.2rem;  /* thoda horizontal space */
    margin-right: 0.2rem;
}

.navbar-nav .nav-link {
    padding: 0.4rem 0.6rem; /* thoda compact */
    font-weight: 500;
    font-size: 0.95rem; /* chota sa text */
}

/* Others-option (buttons) spacing */
.others-option {
    margin-left: auto; /* push to right */
    display: flex;
    gap: 0.4rem; /* reduce space between buttons */
}

.option-item.dropdown .dropdown-menu {
    min-width: 140px; /* smaller dropdown width */
}

.manage-profile-container {
    display: flex;
    justify-content: center; /* center horizontally */
    padding: 10px 0; /* upar neeche thoda space */
    background: #f4f6f9;
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
}

.manage-profile-container .default-btn {
    padding: 6px 18px;
    font-size: 14px;
    border-radius: 5px;
}

.profile-welcome-box{
    text-align:center;
    background:#f4f6f9;
    padding:15px 0;
    border-bottom:1px solid #ddd;
}

.profile-welcome-box .welcome-text{
    font-size:18px;
    font-weight:600;
    color:#333;
    margin-bottom:8px;
}

.profile-welcome-box .default-btn{
    padding:6px 20px;
    font-size:14px;
}

.profile-welcome-box{
box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

/* Extra Big Profile Icon Button */
.option-item.dropdown > a.default-btn {
    width: 54px;            /* bigger width */
    height: 54px;           /* bigger height */
    border-radius: 50%;     /* keep it circular */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #007bff;
    color: #fff;
    font-size: 1.8rem;      /* bigger icon size */
    box-shadow: 0 4px 12px rgba(0,0,0,0.15); /* soft shadow for pop */
    transition: all 0.3s ease;
}

/* Hover effect */
.option-item.dropdown > a.default-btn:hover {
    background: #0056b3;
    transform: scale(1.15);  /* slightly larger on hover */
}

/* Dropdown alignment */
.option-item.dropdown .dropdown-menu-end {
    right: 0;
}

/* Dropdown item hover */
.option-item.dropdown .dropdown-menu .dropdown-item:hover {
    background-color: #f1f1f1;
    color: #007bff;
}
</style>
<!-- Start Header Area -->
        <header class="header-area">

            <!-- Top Header -->
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-12">
                            <ul class="top-header-social">
                                <li><a href="https://www.facebook.com/login/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><li><a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter'></i></a></li></li>
                                <li><li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i class='bx bxl-instagram'></i></a></li></li>
                                <li><a href="https://www.pinterest.com/" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <ul class="top-header-contact-info">
                                <li><i class='bx bx-map'></i> 2750 Quadra Street Victoria, Canada.</li>
                                <li><i class='bx bx-phone-call'></i> Emergancy Helpline: <a href="tel:+44587154756">+44 587 154756</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                 </div>
            <!-- End Top Header -->        
        </header>
        <!-- End Header Area -->
<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="cognizance-responsive-nav">
        <div class="container">
            <div class="cognizance-responsive-menu">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" class="main-logo" alt="logo">
                        <img src="assets/img/logo2.png" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="cognizance-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" class="main-logo" alt="logo">
                    <img src="assets/img/logo2.png" class="white-logo" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="hospital_detail.php" class="nav-link">Hospital details</a></li>
                        <li class="nav-item"><a href="dashboard.php" class="nav-link">Doctor Details</a></li>
                        <li class="nav-item"><a href="products.php" class="nav-link">Shop</a></li>
                        <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>


                        <?php
                        if(isset($_SESSION['patient'])) {
                            echo '<li class="nav-item"><a href="appointment.php" class="nav-link">Book Appointment</a></li>';
                            
                        }
                        ?>

                    </ul>

<div class="others-option d-flex align-items-center">

<?php
// Check if any user is logged in
if(!isset($_SESSION['patient']) && !isset($_SESSION['doctor']) && !isset($_SESSION['hospital'])) { 
?>

    <!-- Sign-up Dropdown -->
    <div class="option-item dropdown">
        <button class="default-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="padding: 8px 12px; font-size: 0.85rem; border-radius:5px 0 0 5px;">
            Sign-up
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="patient.php">Patient Sign-up</a></li>
            <li><a class="dropdown-item" href="doctor-signup.php">Doctor Sign-up</a></li>
            <li><a class="dropdown-item" href="hospital.php">Hospital Sign-up</a></li>
        </ul>
    </div>

    <!-- Login Dropdown -->
    <div class="option-item dropdown">
        <button class="default-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="padding: 8px 12px; font-size: 0.85rem; border-radius:0 5px 5px 0; margin-left:-1px;">
            Login
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Patient Login</a></li>
            <li><a class="dropdown-item" href="doctor-login.php">Doctor Login</a></li>
            <li><a class="dropdown-item" href="hospital-login.php">Hospital Login</a></li>
        </ul>
    </div>

<?php 
} else { 
?>
    <div class="others-option d-flex align-items-center text-center">

<?php if(isset($_SESSION['patient']) || isset($_SESSION['doctor']) || isset($_SESSION['hospital'])): ?>
    <!-- Profile Icon -->
    <div class="option-item dropdown">
        <a class="default-btn dropdown-toggle" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false"
           style="padding:px 10px; border-radius:50%; display:flex; align-items:center; justify-content:center;">
            <i class='bx bx-user' style="font-size:1.2rem;"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <?php if(isset($_SESSION['patient'])): ?>
                <li><a class="dropdown-item" href="profile.php">Manage Profile</a></li>
            <?php elseif(isset($_SESSION['doctor'])): ?>
                <li><a class="dropdown-item" href="doctor-manage-profile.php">Manage Profile</a></li>
            <?php elseif(isset($_SESSION['hospital'])): ?>
                <li><a class="dropdown-item" href="hospital-manage-profile.php">Manage Profile</a></li>
            <?php endif; ?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
    </div>
<?php else: ?>
    <!-- Sign-up / Login buttons -->
    <div class="option-item">
        <a href="patient.php" class="default-btn">Sign Up</a>
        <a href="login.php" class="default-btn">Login</a>
    </div>
<?php endif; ?>

</div>
<?php } ?>
</div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->