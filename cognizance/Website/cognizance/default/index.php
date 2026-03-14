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

/*  Doctor Card */ 
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
session_start();
require 'db.php';
require 'header.php';
?>



<br>
        <!-- Start Main Banner Area -->
        <div class="banner-wrapper banner-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-wrapper-content">
                            <h1>Most People Infected With The COVID-19</h1>
                            <p>Be Clean & Keep Clean, Maintain Social Distance, Avoid All Kinds of Crowds including Social Gathering, Protect Yourself and Others, Save Humankind!</p>
                            <div class="btn-box">
                                <a href="about.php" class="default-btn"><i class="flaticon-open-book"></i> Learn More</a>
                                <a href="https://www.youtube.com/watch?v=iVo5j9mZq7g" class="popup-youtube optional-btn"><i class="flaticon-play-button"></i> Watch Video</a>
                                <?php if(isset($_SESSION['patient'])): ?>
    <!-- User is logged in -->
    <a href="appointment.php" class="default-btn text-center">    
        <i class="bx bx-calendar"></i> Book Appointment
    </a>
<?php else: ?>
    <!-- User not logged in -->
    <a href="login.php" class="default-btn text-center" onclick="alert('Please login first!')">    
        <i class="bx bx-calendar"></i> Book Appointment
    </a>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Outbreak Area + Stats Area -->
        <section class="outbreak-area ptb-100">
            <div class="container">
                <div class="outbreak-content">
                    <div class="outbreak-box-list">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <div class="single-outbreak-box">
                                    <div class="icon">
                                        <img src="assets/img/icon5.png" alt="icon">
                                    </div>
                                    <h3 class="odometer" data-count="196">00</h3>
                                    <p>Total Country</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <div class="single-outbreak-box">
                                    <div class="icon">
                                        <img src="assets/img/icon6.png" alt="icon">
                                    </div>
                                    <h3 class="odometer" data-count="375498">00</h3>
                                    <p>Confirmed Cases</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <div class="single-outbreak-box">
                                    <div class="icon">
                                        <img src="assets/img/icon7.png" alt="icon">
                                    </div>
                                    <h3 class="odometer" data-count="16362">00</h3>
                                    <p>Deaths</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-md-6">
                                <div class="single-outbreak-box">
                                    <div class="icon">
                                        <img src="assets/img/icon8.png" alt="icon">
                                    </div>
                                    <h3 class="odometer" data-count="109102">00</h3>
                                    <p>Recovered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/banner-map.png" alt="image">

                    <div class="table-responsive">
                        <table id="outbreakTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Country,<br>Other</th>
                                    <th>Total<br>Cases</th>
                                    <th>New<br>Cases</th>
                                    <th>Total<br>Deaths</th>
                                    <th>New<br>Deaths</th>
                                    <th>Total<br>Recovered</th>
                                    <th>Active<br>Cases</th>
                                    <th>Serious,<br>Critical</th>
                                    <th>Tot&nbsp;Cases/<br>1M pop</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>375,498</th>
                                    <th class="new_case">3,267</th>
                                    <th class="new_death">13,068</th>
                                    <th>61</th>
                                    <th>95,828</th>
                                    <th>199,361</th>
                                    <td>9,943</td>
                                    <td>39.5</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><a href="#">China</a></td>
                                    <td>81,218</td>
                                    <td class="new_case">+47</td>
                                    <td>3,281</td>
                                    <td class="new_death">+4</td>
                                    <td>73,650</td>
                                    <td>4,287</td>
                                    <td>1,399</td>
                                    <td>56</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Italy</a></td>
                                    <td>69,176</td>
                                    <td></td>
                                    <td>6,820</td>
                                    <td></td>
                                    <td>8,326</td>
                                    <td>54,030</td>
                                    <td>3,393</td>
                                    <td>1,144</td>
                                </tr>
                                <tr>
                                    <td><a href="#">USA</a></td>
                                    <td>54,935</td>
                                    <td class="new_case">+54</td>
                                    <td>784</td>
                                    <td class="new_death">+4</td>
                                    <td>379</td>
                                    <td>53,772</td>
                                    <td>1,175</td>
                                    <td>166</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Spain</a></td>
                                    <td>42,058</td>
                                    <td></td>
                                    <td>2,991</td>
                                    <td></td>
                                    <td>3,794</td>
                                    <td>35,273</td>
                                    <td>2,636</td>
                                    <td>900</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Germany</a></td>
                                    <td>32,991</td>
                                    <td></td>
                                    <td>159</td>
                                    <td></td>
                                    <td>3,290</td>
                                    <td>29,542</td>
                                    <td>23</td>
                                    <td>394</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Iran</a></td>
                                    <td>24,811</td>
                                    <td></td>
                                    <td>1,934</td>
                                    <td></td>
                                    <td>8,913</td>
                                    <td>13,964</td>
                                    <td></td>
                                    <td>295</td>
                                </tr>
                                <tr>
                                    <td><a href="#">France</a></td>
                                    <td>22,304</td>
                                    <td></td>
                                    <td>1,100</td>
                                    <td></td>
                                    <td>3,281</td>
                                    <td>17,923</td>
                                    <td>2,516</td>
                                    <td>342</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Switzerland</a></td>
                                    <td>9,991</td>
                                    <td class="new_case">+114</td>
                                    <td>133</td>
                                    <td class="new_death">+11</td>
                                    <td>131</td>
                                    <td>9,727</td>
                                    <td>141</td>
                                    <td>1,154</td>
                                </tr>
                                <tr>
                                    <td><a href="#">S. Korea</a></td>
                                    <td>9,137</td>
                                    <td class="new_case">+100</td>
                                    <td>126</td>
                                    <td class="new_death">+6</td>
                                    <td>3,730</td>
                                    <td>5,281</td>
                                    <td>59</td>
                                    <td>178</td>
                                </tr>
                                <tr>
                                    <td><a href="#">UK</a></td>
                                    <td>8,077</td>
                                    <td></td>
                                    <td>422</td>
                                    <td></td>
                                    <td>135</td>
                                    <td>7,520</td>
                                    <td>20</td>
                                    <td>119</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Netherlands</a></td>
                                    <td>5,560</td>
                                    <td></td>
                                    <td>276</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>5,282</td>
                                    <td>435</td>
                                    <td>324</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Austria</a></td>
                                    <td>5,394</td>
                                    <td class="new_case">+111</td>
                                    <td>30</td>
                                    <td class="new_death">+2</td>
                                    <td>9</td>
                                    <td>5,355</td>
                                    <td>26</td>
                                    <td>599</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Belgium</a></td>
                                    <td>4,269</td>
                                    <td></td>
                                    <td>122</td>
                                    <td></td>
                                    <td>461</td>
                                    <td>3,686</td>
                                    <td>381</td>
                                    <td>368</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Norway</a></td>
                                    <td>2,868</td>
                                    <td class="new_case">+2</td>
                                    <td>13</td>
                                    <td class="new_death">+1</td>
                                    <td>6</td>
                                    <td>2,849</td>
                                    <td>44</td>
                                    <td>529</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Canada</a></td>
                                    <td>2,792</td>
                                    <td></td>
                                    <td>26</td>
                                    <td></td>
                                    <td>112</td>
                                    <td>2,654</td>
                                    <td>1</td>
                                    <td>74</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </section>
        <!-- End Outbreak Area + STATS Area -->

        <!-- Start About Area -->
        <section class="about-area-two bg-f9f9f9 ptb-100">
            <div class="container">
                <div class="about-inner-area">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-12 image">
                            <div class="about-image-two">
                                <img src="assets/img/about-img4.jpg" alt="image">
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-12 content">
                            <div class="about-content-two">
                                <span class="sub-title">About Covid-19</span>
                                <h2>About Coronavirus Disease</h2>
                                <h6>About Covid-19 - About Coronavirus Disease. We support student forums 24/7 for national and international patients.


                                Stay Home & Safe For You and Others, And Maintain All the Safety Measures by Medical Professionals to Defeat It!


                                Know the Symptoms of the Coronavirus (Covid-19) and inform others. Follow the safety steps instructed by the World Health Organization (WHO).

                                Most People Infected With The COVID-19 Virus should be clean & keep clean, maintain social distance, avoid crowds including social gatherings, and protect yourself and others!</h6>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End About Area -->

        <!-- Start Emergency Contact Area -->
<section class="emergency-contact-area bg-f9f9f9 pb-100">
    <div class="container">
        <div class="emergency-contact-inner">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="btn-box">
                        <a href="doctors.php" class="default-btn"><i class="flaticon-doctor"></i> Meet The Doctor</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="contact-cta">
                        <a href="tel:+44587154756">
                            <i class="flaticon-call"></i>
                            <span>Emergency Contact</span>
                            +44 587 154756
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Emergency Contact Area -->

<!-- Start Doctors Cards Area -->
<section class="doctors-list-area pt-100 pb-70">
    <div class="container">

        <div class="section-title text-center mb-5">
            <span class="sub-title">Our Doctors</span>
            <h2>Doctors List</h2>
        </div>

        <div class="row">

        <?php

$degrees = mysqli_query($conn,"SELECT DISTINCT degree FROM doctor_details WHERE status='approved'");

while($deg = mysqli_fetch_assoc($degrees)){

    $degree = $deg['degree'];

    $doctors = mysqli_query($conn,"SELECT * FROM doctor_details 
    WHERE degree='$degree' AND status='approved' 
    LIMIT 2");

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

<p><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>

<p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>

<p><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
<div class="doctor-btn">
<a href="doctor-profile.php?id=<?php echo $row['id']; ?>" class="view-btn">View Profile</a>

<a href="appointment.php?doctor_id=<?php echo $row['id']; ?>" class="book-btn">Book</a>
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

        <!-- Start Hospital Cards Area -->
<section class="hospital-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Our Hospitals</span>
            <h2>Hospitals List</h2>
        </div>

        <div class="row">
            <?php
            $result = mysqli_query($conn,"SELECT * FROM hospitals WHERE status='approved' LIMIT 10");

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm p-3">
                            <div class="card-body">

    <?php if(!empty($row['hospital_image'])) { ?>
        <div class="mb-3 text-center">
            <img src="uploads/<?php echo htmlspecialchars($row['hospital_image']); ?>" 
                 alt="<?php echo htmlspecialchars($row['hospital_name']); ?> Image" 
                 class="img-fluid rounded" 
                 style="max-height:200px;">
        </div>
    <?php } ?>


    <h4 class=" "><?php echo htmlspecialchars($row['hospital_name']); ?></h4>
    <p class="card-text"><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
    <p class="card-text"><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
    <p class="card-text"><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>"><?php echo htmlspecialchars($row['email']); ?></a></p>
    <p class="card-text"><strong>Details:</strong> <?php echo htmlspecialchars($row['details']); ?></p>
    <?php if(!empty($row['hospital_file'])) { ?>
        <a href="uploads/<?php echo htmlspecialchars($row['hospital_file']); ?>" target="_blank" class="btn btn-primary mt-2">
            View Hospital Detail File
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