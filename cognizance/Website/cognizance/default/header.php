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
    <a href="logout.php" class="default-btn" style="padding:6px 18px;font-size:14px;border-radius:5px;">
        Logout
    </a>
<?php } ?>
</div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->