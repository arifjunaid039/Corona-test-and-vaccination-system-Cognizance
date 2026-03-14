    <?php
    session_start();
    require "db.php";

    // Inputs safely
    $full_name   = trim($_POST['full_name'] ?? '');
    $email       = trim($_POST['email'] ?? '');
    $phone       = trim($_POST['phone'] ?? '');
    $password    = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
    $address     = trim($_POST['address'] ?? '');

    // Basic validation
    if (!$full_name || !$email || !$phone || !$password) {
        echo "<script>alert('Please fill all required fields!'); window.history.back();</script>";
        exit();
    }

    // Email check
    $check = mysqli_query($conn, "SELECT id FROM patients WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Email already registered. Please login.'); window.location.href='patient.php';</script>";
        exit();
    }

    // Prepared statement to insert
    $stmt = $conn->prepare("INSERT INTO patients (full_name,email,phone,password,address) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("sssss", $full_name, $email, $phone, $password, $address);

    if($stmt->execute()){
        $patient_id = $stmt->insert_id;

        // Set session
        $_SESSION['patient'] = [
            'id' => $patient_id,
            'email' => $email,
            'name' => $full_name
        ];

        echo "<script>alert('Registration Successful'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Try again.'); window.history.back();</script>";
    }
    ?>