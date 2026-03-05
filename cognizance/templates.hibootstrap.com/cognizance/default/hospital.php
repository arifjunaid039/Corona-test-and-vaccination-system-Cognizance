<!Doctype html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="assets/css/boxicons.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/datatables.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <style>
      .c {
    color: #bfbfbf; /* Off-white, 1-2% darker than pure white */
    font-size: 16px;
    line-height: 1.6;
    margin-top: 15px;
}
    </style>

    <title>Cognizance - Hospital Registration</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
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
        <div class="container c">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-md-12">
              <ul class="top-header-social">
                <li>
                  <a href="https://www.facebook.com/login/" target="_blank"
                    ><i class="bx bxl-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/i/flow/login" target="_blank"
                    ><i class="bx bxl-twitter"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/accounts/login/"
                    target="_blank"
                    ><i class="bx bxl-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.pinterest.com/" target="_blank"
                    ><i class="bx bxl-pinterest-alt"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank"
                    ><i class="bx bxl-linkedin"></i
                  ></a>
                </li>
              </ul>
            </div>

            <div class="col-lg-8 col-md-12">
              <ul class="top-header-contact-info">
                <li>
                  <i class="bx bx-map"></i> 2750 Quadra Street Victoria, Canada.
                </li>
                <li>
                  <i class="bx bx-phone-call"></i> Emergency Helpline:
                  <a href="tel:+44587154756">+44 587 154756</a>
                </li>
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

    <!-- Start Hospital Registration Area -->
    <section class="appointment-area ptb-100">
      <div class="container">
        <div class="section-title">
          <span class="sub-title">Hospital Portal</span>
          <h2>Partner Hospital Registration</h2>
          <p>
            Register your hospital to join the Cognizance Healthcare Network.
          </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div class="appointment-form">
<form action="hospital-register.php" method="POST" enctype="multipart/form-data">
  <div class="row">

    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="text"
               name="hospital_name"
               class="form-control"
               placeholder="Hospital Name"
               required>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="email"
               name="email"
               class="form-control"
               placeholder="Official Email Address"
               required>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="password"
               name="password"
               class="form-control"
               placeholder="Password"
               required>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="form-group">
        <input type="text"
               name="phone"
               class="form-control"
               placeholder="Phone Number">
      </div>
    </div>

    <div class="col-lg-12 col-md-12">
      <div class="form-group">
        <textarea name="address"
                  class="form-control"
                  rows="4"
                  placeholder="Hospital Address"></textarea>
      </div>
    </div>

    <div class="col-lg-12 col-md-12">
      <div class="form-group">
        <textarea name="details"
                  class="form-control"
                  rows="6"
                  placeholder="Hospital Detail"></textarea>
      </div>
    </div>

    <div class="col-lg-12 col-md-12">
  <div class="form-group">
    <label>Upload Hospital Detail File (PDF / DOC)</label>
    <input type="file"
           name="hospital_file"
           class="form-control"
           accept=".pdf,.doc,.docx"
           required>
  </div>
</div>

    <div class="col-lg-12 col-md-12 text-center">
      <button type="submit"
              name="register"
              class="default-btn">
        <i class="flaticon-open-book"></i> Send Request
      </button>
    </div>

  </div>
</form>

              </div>
          </div>
       </div>

        <!-- Hospital Info Cards -->
        <div class="row pt-70 justify-content-center text-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-contact-info-box">
              <div class="icon">
                <i class="bx bx-check-circle"></i>
              </div>
              <h3>Approval System</h3>
              <p>
                All hospital accounts require admin approval before activation.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-contact-info-box">
              <div class="icon">
                <i class="bx bx-shield"></i>
              </div>
              <h3>Secure Access</h3>
              <p>Data protection and secure login for all partner hospitals.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="single-contact-info-box">
              <div class="icon">
                <i class="bx bx-hospital"></i>
              </div>
              <h3>Healthcare Network</h3>
              <p>Join a professional healthcare collaboration platform.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hospital Registration Area -->

   
<?php
require 'footer.php'

?>

    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
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
