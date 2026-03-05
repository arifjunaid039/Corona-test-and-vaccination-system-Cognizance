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
                                <a href="appointment.php" class="default-btn"><i class="flaticon-open-book"></i> Request Appointment</a>
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

        <!-- Start Doctors Area -->
        <section class="doctors-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Doctors</span>
                    <h2>Meet Specialist Doctors</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-doctors-box">
                            <div class="image">
                                <img src="assets/img/doctors/img1.jpg" alt="image">
                            </div>

                            <div class="content">
                                <h3>Dr. Addison Smith</h3>
                                <span>Nephrologists</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-doctors-box">
                            <div class="image">
                                <img src="assets/img/doctors/img2.jpg" alt="image">
                            </div>

                            <div class="content">
                                <h3>Dr. Sarah Taylor</h3>
                                <span>Infectious</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-md-6   offset-sm-3">
                        <div class="single-doctors-box">
                            <div class="image">
                                <img src="assets/img/doctors/img3.jpg" alt="image">
                            </div>

                            <div class="content">
                                <h3>Dr. Aiken Ward</h3>
                                <span>Cardiologists</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Doctors Area -->

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