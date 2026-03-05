<?php
include 'db.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check admin in DB
    $res = mysqli_query($conn, "SELECT * FROM admins WHERE Adminname='$username'");
    
    if(mysqli_num_rows($res) == 1){
        $admin = mysqli_fetch_assoc($res);

        // Check password
if($password === $admin['password']){
            session_start();
            $_SESSION['admin'] = $admin['Adminname'];
            header("Location: admin-dashboard.php");
            exit;
        } else {
            echo "<script>alert('Wrong password'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Admin not found'); window.history.back();</script>";
    }
}
?>
