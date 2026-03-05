<?php
include 'db.php';

if(isset($_POST['submit'])){

    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
    $help_type = mysqli_real_escape_string($conn, $_POST['help_type']);
    $visit_date = $_POST['visit_date'];
    $captcha   = $_POST['captcha'];

    if($captcha != 10){
        echo "<script>alert('Captcha Wrong! 3 + 7 = 10');</script>";
    }
    else{
        $query = "INSERT INTO appointments (full_name, email, help_type, visit_date)
                  VALUES ('$full_name', '$email', '$help_type', '$visit_date')";

        if(mysqli_query($conn, $query)){
            echo "<script>alert('Appointment Booked Successfully');
            window.location.href='appointment.php';
            </script>";
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
