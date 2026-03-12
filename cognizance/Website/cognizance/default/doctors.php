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
                    <h2>Doctors</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Doctors</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

<!-- Start Doctors Cards Area -->
<section class="doctors-list-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Our Doctors</span>
            <h2>Doctors List</h2>
        </div>

        <div class="row">
            <?php
            require 'db.php';


            $approved_doctors = mysqli_query($conn, "SELECT * FROM doctor_details WHERE status='approved' ORDER BY created_at DESC");

if(mysqli_num_rows($approved_doctors) > 0){
    while($row = mysqli_fetch_assoc($approved_doctors)){
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['full_name']); ?></h5>
                    <p class="card-text"><strong>Degree:</strong> <?= htmlspecialchars($row['degree']); ?></p>
                    <p class="card-text"><strong>Phone:</strong> <a href="tel:<?= htmlspecialchars($row['phone']); ?>"><?= htmlspecialchars($row['phone']); ?></a></p>
                    <p class="card-text"><strong>Email:</strong> <a href="mailto:<?= htmlspecialchars($row['email']); ?>"><?= htmlspecialchars($row['email']); ?></a></p>
                    <p class="card-text"><strong>Address / Hospital:</strong> <?= htmlspecialchars($row['address']); ?></p>
                    <p class="card-text"><small class="text-muted">Registered On: <?= date('d M Y', strtotime($row['created_at'])); ?></small></p>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo '<div class="col-12 text-center"><p>No doctors added yet.</p></div>';
}
?>
        </div>
    </div>
</section>
<!-- End Doctors Cards Area -->


        <!-- Start Symptoms Area -->
        <section class="symptoms-area pt-100">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="symptoms-image">
                            <img src="assets/img/symptoms-img.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="symptoms-content">
                            <span class="sub-title">Symptoms</span>
                            <h2>Coronavirus Symptoms</h2>
                            <p>COVID-19 (coronavirus) commonly causes fever, dry cough, and tiredness, often with body aches and headache. Many people also experience sore throat, a runny or blocked nose, and sometimes nausea, vomiting, or diarrhea. A sudden loss of taste or smell is another typical symptom. In more serious cases, people can develop difficulty breathing, chest pain, confusion, or bluish lips/face, which require immediate medical attention.</p>

                            <ul>
                                <li><span><i class='flaticon-tick'></i> Cough</span></li>
                                <li><span><i class='flaticon-tick'></i> Fever</span></li>
                                <li><span><i class='flaticon-tick'></i> Tiredness</span></li>
                                <li><span><i class='flaticon-tick'></i> Headache</span></li>
                                <li><span><i class='flaticon-tick'></i> Breath Shortness</span></li>
                                <li><span><i class='flaticon-tick'></i> Muscle Pain</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Symptoms Area -->

        <br><hr>
        <?php
        require 'footer.php';
        ?>

        <!-- Links of JS files -->
          <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
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