<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM patients WHERE email='$email'");

    if(mysqli_num_rows($query) == 1){

        $row = mysqli_fetch_assoc($query);

        if(password_verify($password, $row['password'])){

            $_SESSION['patient'] = $row['id'];
            $_SESSION['patient_name'] = $row['name'];

            header("Location: index.php");
            exit();

        } else {
            $error = "Wrong Password!";
        }

    } else {
        $error = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Patient Login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5" style="max-width:500px;">
<h3 class="text-center">Patient Login</h3>

<?php if(isset($error)){ ?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } ?>

<form method="POST">

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="login" class="btn btn-primary w-100">
Login
</button>

</form>
</div>

</body>
</html>