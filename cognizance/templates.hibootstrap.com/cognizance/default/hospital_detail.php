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


        <!-- Hospital detail area start -->
        
                <section class="canada-hospitals">
    <div class="container">

        <h1>Top Hospitals in Canada</h1>

        <!-- Hospital 1 -->
        <div class="hospital">
            <div class="hospital-img">
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3" alt="Toronto General Hospital">
            </div>
            <div class="hospital-content">
                <h2>Toronto General Hospital</h2>
                <p>
                    Located in Toronto, Ontario and established in 1819, Toronto General Hospital 
                    is internationally recognized for cardiac care, organ transplantation, and 
                    advanced surgical procedures.
                </p>
            </div>
        </div>

        <!-- Hospital 2 -->
        <div class="hospital">
            <div class="hospital-img">
                <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907" alt="Montreal General Hospital">
            </div>
            <div class="hospital-content">
                <h2>Montreal General Hospital</h2>
                <p>
                    Founded in 1821 and affiliated with McGill University, this hospital is known 
                    for trauma services, emergency care, and research excellence in Quebec.
                </p>
            </div>
        </div>

        <!-- Hospital 3 -->
        <div class="hospital">
            <div class="hospital-img">
                <img src="https://oatrx.ca/storage/hospitals/vancouver-general-hospital-vancouver.jpg" alt="Vancouver General Hospital">
            </div>
            <div class="hospital-content">
                <h2>Vancouver General Hospital</h2>
                <p>
                    Established in 1906, Vancouver General Hospital specializes in cancer treatment, 
                    neurosciences, and critical care services in British Columbia.
                </p>
            </div>
        </div>

        <!-- Hospital 4 -->
        <div class="hospital">
            <div class="hospital-img">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef" alt="Sunnybrook Health Sciences Centre">
            </div>
            <div class="hospital-content">
                <h2>Sunnybrook Health Sciences Centre</h2>
                <p>
                    A major academic health science centre in Toronto known for trauma care, 
                    veterans’ health services, and high-risk maternal care.
                </p>
            </div>
        </div>

        <!-- Hospital 5 -->
        <div class="hospital">
            <div class="hospital-img">
                <img src="https://images.unsplash.com/photo-1587351021759-3e566b6af7cc" alt="The Ottawa Hospital">
            </div>
            <div class="hospital-content">
                <h2>The Ottawa Hospital</h2>
                <p>
                    One of Canada’s largest teaching hospitals providing specialized care in 
                    cancer treatment, heart disease, and neuroscience research.
                </p>
            </div>
        </div>

        <!-- Stats Table -->
        <h2 class="table-title">Hospital Statistics Overview</h2>

        <table>
            <tr>
                <th>Hospital</th>
                <th>Location</th>
                <th>Established</th>
                <th>Beds</th>
                <th>Specialty</th>
            </tr>
            <tr>
                <td>Toronto General</td>
                <td>Toronto</td>
                <td>1819</td>
                <td>400+</td>
                <td>Cardiac & Transplants</td>
            </tr>
            <tr>
                <td>Montreal General</td>
                <td>Montreal</td>
                <td>1821</td>
                <td>300+</td>
                <td>Trauma Care</td>
            </tr>
            <tr>
                <td>Vancouver General</td>
                <td>Vancouver</td>
                <td>1906</td>
                <td>900+</td>
                <td>Cancer & Neuro</td>
            </tr>
            <tr>
                <td>Sunnybrook</td>
                <td>Toronto</td>
                <td>1948</td>
                <td>600+</td>
                <td>Trauma & Veterans</td>
            </tr>
            <tr>
                <td>Ottawa Hospital</td>
                <td>Ottawa</td>
                <td>1998</td>
                <td>1000+</td>
                <td>Heart & Cancer</td>
            </tr>
        </table>

    </div>
</section>
<!-- Hospital details end here -->

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
    </body>

</html>