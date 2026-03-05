<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Files -->
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
.contact-area .form-group {
    margin-bottom: 20px;
}
.contact-area .form-control {
    border: 1px solid #ddd;
    padding: 12px 15px;
    border-radius: 8px;
    transition: all 0.3s;
}
.contact-area .form-control:focus {
    border-color: #d4af37; /* Cognizance gold accent */
    box-shadow: 0 0 8px rgba(212,175,55,0.3);
}
.contact-area .default-btn {
    background-color: #d4af37;
    border: none;
    color: #fff;
    padding: 12px 30px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
}
.contact-area .default-btn:hover {
    background-color: #b8972c;
}
</style>

    <title>Cognizance - Contact Us</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
<?php require 'header.php'; ?>

<!-- Page Title -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-area ptb-100">
    <div class="container">

        <form method="POST" action="contact1.php">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
    <div class="form-group">
        <input type="text" name="phone" placeholder="Your Phone Number" class="form-control" required>
    </div>
</div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" class="form-control" rows="6" required></textarea>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 text-center">
                    <button type="submit" class="default-btn">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Google Map -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.8158792277713!2d-123.36243578415748!3d48.44087343796659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548f7381102ff519%3A0xc03e5586418eb3f2!2s2750%20Quadra%20St%2C%20Victoria%2C%20BC%20V8T%204E8%2C%20Canada!5e0!3m2!1sen!2sbd!4v1622968285073!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<?php require 'footer.php'; ?>

<!-- JS Files -->
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