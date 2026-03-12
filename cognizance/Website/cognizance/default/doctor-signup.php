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

          

             <?php
        require 'db.php';
        require 'header.php';
        ?>


<!-- Doctor Registration Form -->
<section class="contact-area pt-100 pb-100 bg-f9f9f9">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Register Here</span>
            <h2>Doctor Registration Form</h2>
            <p>Please fill in all required fields to register as a doctor.</p>
        </div>

        <div class="contact-form">
            <form id="doctor-registration-form" method="post" action="doctor-signup1.php" enctype="multipart/form-data">
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
                            <input type="tel" name="phone" class="form-control"  id="phone" placeholder="Enter phone number" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"  placeholder="Enter password" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Degree</label>
                            <select name="degree" class="form-control" required>
                                <option value="">-- Select Degree --</option>
                                <option value="Cardiologist">Cardiologist</option>
                                <option value="Dermatologist">Dermatologist</option>
                                <option value="Neurologist">Neurologist</option>
                                <option value="Pediatrician">Pediatrician</option>
                                <option value="General Practitioner">General Practitioner</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Upload CV</label>
                            <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
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
document.getElementById("phone").addEventListener("input", function(){

let phone = this.value;

let regex = /^(03[0-9]{9})$/;

if(!regex.test(phone)){
this.setCustomValidity("Enter valid phone number (03XXXXXXXXX)");
}
else{
this.setCustomValidity("");
}

});
</script>
</body>
</html>
