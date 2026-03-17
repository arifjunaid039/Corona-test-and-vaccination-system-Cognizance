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

        <style>

.doctor-img-wrapper {
    width: 100%;
    overflow: hidden;
    border-radius: 10px;
    text-align: center;
    padding: 10px; /* adds white space around image */
}

.doctor-img-wrapper img {
    max-width: 100%;
    max-height: 200px; /* compact but clear */
    border-radius: 10px;
    object-fit: cover;
    transition: transform 0.3s;
    display: inline-block; /* centers inside wrapper */
}

.doctor-card:hover .doctor-img-wrapper img {
    transform: scale(1.05);
}

.doctor-card-body {
    padding: 10px;
    text-align: center;
    font-size: 0.9rem;
}   

/* Degree Heading Style */
.degree-heading{
    width: 100%;
    margin: 40px 0 20px;
    text-align: center;
}

.degree-heading h3{
    display: inline-block;
    font-size: 28px;
    font-weight: 600;
    color: #2f80ed;
    position: relative;
    padding-bottom: 10px;
}

.degree-heading h3::after{
    content: "";
    width: 60%;
    height: 3px;
    background: #2f80ed;
    position: absolute;
    left: 20%;
    bottom: 0;
    border-radius: 2px;
}
/* Doctor Card */
.doctor-card{
    border-radius:12px;
    background:#fff;
    overflow:hidden;
    transition:all 0.3s ease;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
}

.doctor-card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 25px rgba(0,0,0,0.18);
}

.doctor-card:hover img{
    transform:scale(1.08);
}

/* Card Body */
.doctor-card-body{
    padding:15px;
    text-align:center;
}

.doctor-card-body h4{
    font-size:20px;
    font-weight:600;
    margin-bottom:8px;
}

.doctor-card-body p{
    font-size:14px;
    margin-bottom:6px;
    color:#555;
}

/* Buttons */
.doctor-btn{
    margin-top:10px;
}

.doctor-btn a{
    display:inline-block;
    padding:6px 14px;
    font-size:13px;
    border-radius:5px;
    margin:3px;
    text-decoration:none;
}

.view-btn{
    background:#2f80ed;
    color:#fff;
}

.book-btn{
    background:#27ae60;
    color:#fff;
}

.view-btn:hover{
    background:#1c63c9;
}

.book-btn:hover{
    background:#1e874b;
}

</style>
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

    $degrees = mysqli_query($conn,"SELECT DISTINCT degree FROM doctor_details WHERE verified_status='verified'");

while($deg = mysqli_fetch_assoc($degrees)){

    $degree = $deg['degree'];

    echo "<div class='degree-heading'><h3>$degree</h3></div>";


$doctors = mysqli_query($conn,"SELECT *,
    (SELECT hospital_name FROM hospitals WHERE id = doctor_details.hospital_id) AS hospital_name
    FROM doctor_details 
    WHERE degree='$degree' AND verified_status='verified'");

    while($row = mysqli_fetch_assoc($doctors)){

        $photo = !empty($row['photo']) ? $row['photo'] : "default-doctor.jpg";
?>

<div class="col-lg-4 col-md-6 mb-4">
    <div class="doctor-card">

        <div class="doctor-img-wrapper">
            <img src="uploads/doctors/<?php echo $photo; ?>" alt="">
        </div>

        <div class="doctor-card-body">

            <h4><?php echo htmlspecialchars($row['full_name']); ?></h4>

            <p><strong>Specialization:</strong> <?php echo htmlspecialchars($row['degree']); ?></p>
<p><strong>University:</strong> <?php echo htmlspecialchars($row['university_name'] ?? ''); ?></p><p><strong>Graduation Year:</strong> <?php echo htmlspecialchars($row['graduation_year'] ?? 'Not assigned'); ?></p>
<p><strong>PMC Number:</strong> <?php echo htmlspecialchars($row['pmc_number'] ?? 'Not assigned'); ?></p>
            <p><strong>Hospital:</strong> <?php echo htmlspecialchars($row['hospital_name'] ?? 'Not assigned'); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>

            <div class="doctor-btn">
<?php if(!empty($row['details'])): ?>
    <a href="uploads/doctor_details/<?php echo htmlspecialchars($row['details']); ?>" target="_blank" class="view-btn">
        View Details File
    </a>
<?php endif; ?>
            </div>

            <p class="text-muted">
                Registered: <?php echo date('d M Y', strtotime($row['created_at'])); ?>
            </p>

        </div>
    </div>
</div>

<?php
    }
}
?>
</section>
<!-- End Doctors Cards Area -->
        <hr>
        


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