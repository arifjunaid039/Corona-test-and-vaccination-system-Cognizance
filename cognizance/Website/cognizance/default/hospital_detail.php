  <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

            

             <?php
        require 'db.php';
        ?>
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
<?php
        require 'header.php';

?>

       <style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter', sans-serif;
}

.canada-hospitals{
    padding:80px 20px;
    background:#f5f9ff;
}

.container{
    max-width:1200px;
    margin:auto;
}

.canada-hospitals h1{
    text-align:center;
    font-size:36px;
    font-weight:700;
    color:#0d6efd;
    margin-bottom:50px;
}

.hospital{
    display:flex;
    gap:30px;
    align-items:center;
    background:#ffffff;
    padding:25px;
    border-radius:12px;
    margin-bottom:30px;
    box-shadow:0 5px 25px rgba(0,0,0,0.05);
    transition:0.3s ease;
}

.hospital:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 35px rgba(13,110,253,0.15);
}

.hospital-img img{
    width:300px;
    height:200px;
    object-fit:cover;
    border-radius:10px;
}

.hospital-content h2{
    font-size:20px;
    font-weight:600;
    color:#1e293b;
    margin-bottom:10px;
}

.hospital-content p{
    font-size:15px;
    line-height:1.8;
    color:#64748b;
}

.table-title{
    margin-top:50px;
    margin-bottom:20px;
    font-size:24px;
    color:#0d6efd;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#ffffff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 25px rgba(0,0,0,0.05);
}

table th{
    background:#0d6efd;
    color:#fff;
    padding:15px;
    font-size:14px;
}

table td{
    padding:14px;
    text-align:center;
    font-size:14px;
    color:#475569;
    border-bottom:1px solid #e2e8f0;
}

table tr:hover{
    background:#f1f5ff;
}

/* Responsive */
@media(max-width:768px){

    .hospital{
        flex-direction:column;
        text-align:center;
    }

    .hospital-img img{
        width:100%;
        height:220px;
    }

}

</style>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

        <!-- Start Hospital Cards Area -->
<section class="hospital-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Our Hospitals</span>
            <h2>Hospitals List</h2>
        </div>

        <div class="row">
            <?php
            $result = mysqli_query($conn,"SELECT * FROM hospitals WHERE status='approved'");

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm p-3">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['hospital_name']); ?></h5>
                                <p class="card-text"><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
                                <p class="card-text"><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
                                <p class="card-text"><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>"><?php echo htmlspecialchars($row['email']); ?></a></p>
                                <p class="card-text"><strong>Details:</strong> <?php echo htmlspecialchars($row['details']); ?></p>
                                <?php if(!empty($row['hospital_file'])) { ?>
                                    <a href="uploads/<?php echo htmlspecialchars($row['hospital_file']); ?>" target="_blank" class="btn btn-primary mt-2">
    View Hospital Detail File
</a>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-12 text-center"><p>No hospitals approved yet.</p></div>';
            }
            ?>
        </div>
    </div>
</section>
<!-- End Hospital Cards Area -->

    </div>
</section>

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
        <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
    </body>

</html>