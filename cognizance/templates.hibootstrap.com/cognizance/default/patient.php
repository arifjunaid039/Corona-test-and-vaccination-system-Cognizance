<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration - Cognizance</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <style>
        /* Mobile-friendly button */
        @media (max-width: 767px) {
            .default-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

      <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

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

             <?php
        require 'db.php';
        require 'header.php';
        ?>


        
    
<!-- Page Title -->
<section class="page-title-area py-5">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Patient Registration</h2>
            <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li>Patient Registration</li>
            </ul>
        </div>
    </div>
</section>

<!-- Patient Registration Form -->
<section class="contact-area pt-100 pb-100 bg-f9f9f9">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Register Here</span>
            <h2>Patient Registration Form</h2>
            <p>Please fill in all required fields to register as a patient.</p>
        </div>

        <div class="contact-form">
            <form id="patient-registration-form" method="post">
                <div class="row g-3">

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Select Hospital</label>
                            <select name="hospital_id" class="form-control" required>
                                <option value="">-- Select Hospital --</option>
                                <option value="1">City Hospital</option>
                                <option value="2">Victoria Medical Center</option>
                                <option value="3">Royal Care Hospital</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="3" placeholder="Enter your address" required></textarea>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="default-btn"><i class="flaticon-open-book"></i> Register Now</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

 <?php
require 'footer.php';
 ?>
<!-- JS Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
