    <?php
    require 'db.php';
    $pending_doctors = mysqli_query($conn,"SELECT * FROM doctor_details WHERE status='pending'");
    ?>

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
body {
    background:#f4f6f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 14px; /* base font smaller */
}

.dashboard-title{
    font-weight:700;
    margin:20px 0;
    font-size:22px;
}

.dashboard-card{
    background:white;
    padding:15px; /* less padding */
    margin-bottom:30px;
    margin: 210px 10px 210px 210px;
    border-radius:10px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    transition:0.3s;
}

.dashboard-card:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 25px rgba(0,0,0,0.12);
}

.dashboard-card h2{
    font-size:18px; /* smaller heading */
    font-weight:600;
    margin-bottom:15px;
}

.dashboard-card p{
    font-size:13px;
    margin-top:3px;
    color:#555;
}

.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    font-size:13px; /* smaller table font */
}

.table thead {
    background-color: #0d6efd;
    color: #fff;
    text-align: center;
}

.table th, .table td {
    padding: 8px 6px; /* tighter padding */
    text-align: center;
    vertical-align: middle;
    font-size:12px; /* smaller */
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #e9f2ff;
    transition: 0.2s;
}

.text-muted {
    color: #888 !important;
    font-style: italic;
}

.btn-cv, .btn-success, .btn-danger {
    font-size: 11px; /* smaller buttons */
    padding: 3px 6px;
    border-radius: 4px;
    transition: 0.3s;
}

.btn-cv:hover {
    background-color: #138496;
    transform: translateY(-1px);
}

.btn-success:hover {
    background-color: #0b5ed7;
}

.btn-danger:hover {
    background-color: #c82333;
}

/* Responsive adjustments */
@media(max-width: 768px){
    .table th, .table td {
        font-size:11px;
        padding: 6px 4px;
    }

    .btn-cv, .btn-success, .btn-danger {
        font-size:10px;
        padding: 2px 4px;
    }
}
</style>
    <?php
require 'db.php';
require 'admin_sidebar.php';
$pending_doctors = mysqli_query($conn,"SELECT * FROM doctor_details WHERE status='pending'");
?>

<div class="container">
    <h1 class="dashboard-title">Pending Doctors</h1>

    <div class="dashboard-card">
        <h2>Pending Doctors</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>PMC Number</th>
                    <th>University</th>
                    <th>Graduation Year</th>
                    <th>Phone</th>
                    <th>Degree</th>
                    <th>CV</th>
                    <th>Photo</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if($pending_doctors && mysqli_num_rows($pending_doctors) > 0){
    while($row = mysqli_fetch_assoc($pending_doctors)){
        $cv_file = $row['cv'] ?? '';
        $photo_file = $row['photo'] ?? '';
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['full_name']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td><?= htmlspecialchars($row['pmc_number']) ?></td>
    <td><?= htmlspecialchars($row['university_name']) ?></td>
    <td><?= htmlspecialchars($row['graduation_year']) ?></td>
    <td><?= htmlspecialchars($row['phone']) ?></td>
    <td><?= htmlspecialchars($row['degree']) ?></td>
    <td>
        <?php if(!empty($cv_file)): ?>
            <a href="uploads/cv/<?= htmlspecialchars($cv_file) ?>" target="_blank" class="btn-cv">View CV</a>
        <?php else: ?>
            <span class="text-muted">N/A</span>
        <?php endif; ?>
    </td>
    <td>
        <?php if(!empty($photo_file)): ?>
            <a href="uploads/doctors/<?= htmlspecialchars($photo_file) ?>" target="_blank" class="btn-cv">View Photo</a>
        <?php else: ?>
            <span class="text-muted">N/A</span>
        <?php endif; ?>
    </td>
    <td><?= htmlspecialchars($row['address']) ?></td>
    <td>
        <a href='verify-doctor.php?id=<?= $row['id'] ?>&status=verified' class="btn btn-success btn-sm">Verify ✅</a>
        <a href='verify-doctor.php?id=<?= $row['id'] ?>&status=rejected' class="btn btn-danger btn-sm">Reject ❌</a>
    </td>
</tr>
<?php
    }
} else {
    echo "<tr><td colspan='12' class='text-center'>No pending doctors found</td></tr>";
}
?>
            </tbody>
        </table>
    </div>
</div>