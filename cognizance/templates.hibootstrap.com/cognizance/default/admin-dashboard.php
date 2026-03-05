<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin.html");
    exit;
}

// Fetch pending hospitals
$pending = mysqli_query($conn, "SELECT * FROM hospitals WHERE status='pending'");
?>

<h2>Pending Hospitals</h2>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php while($row = mysqli_fetch_assoc($pending)){ ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['hospital_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="approve.php?id=<?= $row['id'] ?>">Approve</a>
        <a href="reject.php?id=<?= $row['id'] ?>">Reject</a>
    </td>
</tr>
<?php } ?>
</table>
