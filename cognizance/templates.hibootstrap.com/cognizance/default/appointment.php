<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

        <title>Cognizance - Medical Health & Corona Treatment Template</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
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

        <!-- Start Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Appointment</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

        <!-- Start Appointment Area -->
        <section class="appointment-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Appointment</span>
                    <h2>Book an Appointment</h2>
                </div>

                <div class="appointment-form">
                    <form method="post" action="appointment1.php">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="full_name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>How Can We Help?</label>
										
                                    <div class="select-box">
                                        <select name="help_type" class="form-control">
                                            <option>I would like to discuss</option>
                                            <option>Need some help</option>
                                            <option>Give some suggestion</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Visit Date</label>
                                    <input type="date" name="visit_date" class="form-control">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Captcha Question</label>
                                    <input type="text" name="captcha" class="form-control" placeholder="3 + 7 = ?">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" name="submit" class="default-btn"> 
                                    <i class="flaticon-plane"></i> Book Appointment
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Appointment Area -->

       
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