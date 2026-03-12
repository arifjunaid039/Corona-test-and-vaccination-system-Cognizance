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
               id="phone"
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
                  minlength="30"
                  placeholder="Hospital Detail atleast enter 30 words detail"></textarea>
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
    <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
<script>
// Phone number validation
document.getElementById("phone").addEventListener("input", function() {
    let phone = this.value;

    // Pakistan mobile number regex: starts with 03 and total 11 digits
    let regex = /^(03[0-9]{9})$/;

    if (!regex.test(phone)) {
        this.setCustomValidity("Enter valid phone number (03XXXXXXXXX)");
    } else {
        this.setCustomValidity("");
    }
});
</script>
  </body>
</html>
