<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hospital System</title>

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
<style>
body{
    background:#f4f6f9;
}

/* Search Section */
.container-custom{
    text-align:center;
    margin-top:80px;
    min-height:60vh;
}

.search-box{
    background:white;
    padding:30px;
    width:400px;
    margin:auto;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.search-box input{
    width:70%;
    padding:10px;
    border-radius:8px;
    border:1px solid #ccc;
}

.search-box button{
    padding:10px 20px;
    border:none;
    border-radius:8px;
    background:#007bff;
    color:white;
    cursor:pointer;
}

.card{
    background:white;
    width:420px;
    padding:25px;
    margin:30px auto;
    border-radius:15px;
    box-shadow:0 15px 30px rgba(0,0,0,0.1);
    display:none;
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
<div class="container-custom">

    <div class="search-box">
        <h3>Search Doctor</h3>
        <br>
        <input type="text" id="doctorName" placeholder="Enter Doctor Name">
        <button onclick="searchDoctor()">Search</button>
    </div>

    <div class="card" id="doctorCard">
        <h2 id="docName"></h2>
        <p><strong>Specialization:</strong> <span id="docSpec"></span></p>
        <p><strong>Hospital:</strong> <span id="docHospital"></span></p>
        <p><strong>Experience:</strong> <span id="docExp"></span></p>
    </div>

</div>

<?php require 'footer.php'; ?>

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


<script>
const doctors = [
    { name: "Taj", specialization: "Cardiologist", hospital: "City Care Hospital", experience: "10 Years" },
    { name: "junaid", specialization: "Neurologist", hospital: "Metro Hospital", experience: "8 Years" },
    { name: "meisum", specialization: "Pediatrician", hospital: "Green Life Hospital", experience: "6 Years" }
];

function searchDoctor(){
    let input = document.getElementById("doctorName").value.trim().toLowerCase();
    let found = doctors.find(doc => doc.name.toLowerCase() === input);

    if(found){
        document.getElementById("docName").innerText = "Dr. " + found.name;
        document.getElementById("docSpec").innerText = found.specialization;
        document.getElementById("docHospital").innerText = found.hospital;
        document.getElementById("docExp").innerText = found.experience;
        document.getElementById("doctorCard").style.display = "block";
    } else {
        document.getElementById("doctorCard").style.display = "none";
        alert("Doctor not found");
    }
}
</script>

</body>
</html>