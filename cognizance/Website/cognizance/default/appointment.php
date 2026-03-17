<?php
require 'db.php';

// Start session safely
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $hospital_id = intval($_POST['hospital_id']);
    $doctor_id = intval($_POST['doctor_id']);
    $visit_date = htmlspecialchars(trim($_POST['visit_date']));

    if (empty($full_name) || empty($email) || empty($phone) || empty($hospital_id) || empty($doctor_id) || empty($visit_date)) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO appointments (full_name, email, phone, hospital_id, doctor_id, visit_date, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssiss", $full_name, $email, $phone, $hospital_id, $doctor_id, $visit_date);

        if ($stmt->execute()) {
            echo "<script>alert('Appointment booked successfully'); window.location='appointment.php';</script>";
        } else {
            echo "<script>alert('Error booking appointment');</script>";
        }

        $stmt->close();
    }
}

$selected_degree = isset($_GET['doctor_speciality']) ? $_GET['doctor_speciality'] : '';
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

            <style>
    /* ======================== */
    /* Appointment Form Styles  */
    /* ======================== */

    .contact-area {
        background: #f0f4f8;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .contact-area .sub-title {
        color: #007bff;
        font-weight: 600;
        font-size: 18px;
        display: block;
        margin-bottom: 10px;
        text-align: center;
    }

    .contact-area h2 {
        font-weight: 700;
        font-size: 32px;
        margin-bottom: 40px;
        text-align: center;
    }

    .contact-area form {
        background: #fff;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        max-width: 800px;
        margin: 0 auto;
    }

    .contact-area .form-group {
        margin-bottom: 20px;
    }

    .contact-area .form-control {
        height: 50px;
        border-radius: 10px;
        border: 1px solid #ddd;
        padding-left: 15px;
        transition: 0.3s;
        box-shadow: none;
    }

    .contact-area textarea.form-control {
        height: 120px;
        padding-top: 10px;
    }

    .contact-area .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 2px rgba(0,123,255,0.2);
    }

    .contact-area .default-btn {
        background: #007bff;
        color: #fff;
        padding: 14px 35px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .contact-area .default-btn:hover {
        background: #0056b3;
        transform: translateY(-2px);
    }

    /* Responsive Adjustments */
    @media (max-width: 767px){
        .contact-area form {
            padding: 30px 20px;
        }

        .contact-area h2 {
            font-size: 28px;
        }
    }
    </style>

            <title>Cognizance - Medical Health & Corona Treatment</title>

            <link rel="icon" type="image/png" href="assets/img/favicon.png">
        </head>
        <body>

            

                <?php
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
                        <h2>Appointment</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Page Title Area -->

            <!-- Contact Form -->
    <!-- Patient Registration Form -->
    <section class="contact-area pt-100 pb-100 bg-f9f9f9">
        <div class="container">
            <div class="section-title text-center mb-5">
                <span class="sub-title">Register Here</span>
                <h2>Appointment Registration Form</h2>
                <p>Please fill in all required fields to register as a patient.</p>
            </div>

            <div class="contact-form">
                <form id="patient-registration-form" method="post">
                    <div class="row g-3">

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required value="<?php echo isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : ''; ?>">                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email address" required value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control"
                                id="phone" placeholder="Enter phone number" required value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label>Visit Date</label>
            <input type="date" name="visit_date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">        
        </div>
    </div>

    <?php
// Check selected hospital via GET
$selected_hospital = isset($_GET['hospital_id']) ? intval($_GET['hospital_id']) : 0;
$doctors_name = [];

if ($selected_hospital || $selected_degree) {
    $query = "SELECT id, full_name FROM doctor_details WHERE verified_status='verified'";
    $params = [];
    $types = "";

    if ($selected_hospital) {
        $query .= " AND hospital_id=?";
        $types .= "i";
        $params[] = $selected_hospital;
    }

    if ($selected_degree) {
        $query .= " AND degree=?";
        $types .= "s";
        $params[] = $selected_degree;
    }

    $stmt = $conn->prepare($query);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $doctors_name[] = $row;
    }
    $stmt->close();
}
// Fetch hospitals and specialities
$hospitals = mysqli_query($conn,"SELECT id, hospital_name FROM hospitals WHERE status='approved'");
$specialities = mysqli_query($conn,"SELECT DISTINCT degree FROM doctor_details WHERE verified_status='verified'");
?>
<div class="col-12">
    <div class="form-group">
<label>Select Hospital</label>
    <select name="hospital_id" onchange="window.location='?hospital_id='+this.value+'&doctor_speciality=<?php echo urlencode($selected_degree); ?>'">
    <option value="">Select Hospital</option>
    <?php while($row = mysqli_fetch_assoc($hospitals)){
        $sel = ($row['id']==$selected_hospital)?'selected':'';
        echo "<option value='".htmlspecialchars($row['id'])."' $sel>".htmlspecialchars($row['hospital_name'])."</option>";
    } ?>
</select>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
    <label>Select Speciality</label>
    <select name="doctor_speciality" onchange="window.location='?hospital_id=<?php echo $selected_hospital; ?>&doctor_speciality='+this.value">
    <option value="">Select Speciality</option>
    <?php while($row = mysqli_fetch_assoc($specialities)){
        $sel = ($row['degree']==$selected_degree)?'selected':'';
        echo "<option value='".htmlspecialchars($row['degree'])."' $sel>".htmlspecialchars($row['degree'])."</option>";
    } ?>
</select>
    </div>
    </div>

    <div class="col-12">
    <div class="form-group">
    <label>Select Doctor</label>
    <select name="doctor_id">
        <option value="">Select Doctor</option>
        <?php foreach($doctors_name as $doc){
            echo "<option value='".htmlspecialchars($doc['id'])."'>".htmlspecialchars($doc['full_name'])."</option>";
        } ?>
    </select>
    </div>
    </div>
    <div class="col-12 text-center mt-3">
        <button type="submit" name="submit" class="default-btn"> 
            <i></i> Book Appointment
        </button>
    </div>
        </form>

    </div>
    </section>

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