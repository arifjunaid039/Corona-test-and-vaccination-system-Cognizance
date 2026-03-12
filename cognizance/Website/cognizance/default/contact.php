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
            <section class="appointment-area ptb-100">
                <div class="container">
                    <div class="section-title">
                        
                    </div>

                    <div class="appointment-form">
                        <form method="post" action="contact1.php">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="full_name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Name">
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
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" placeholder="Enter your message" rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="submit" class="default-btn"> 
                                        <i></i> Send Message
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
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

    <script>
    (function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
    </script>

    <script>
    document.getElementById("phone").addEventListener("input", function() {
    let phone = this.value;
    let regex = /^(03[0-9]{9})$/; 
    if(!regex.test(phone)){
        this.setCustomValidity("Please enter valid phone number (03XXXXXXXXX)");
    } else {
        this.setCustomValidity("");
    }
});
    </script>
    </body>
    </html>