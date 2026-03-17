<?php
require "db.php";
$sql = "SELECT * FROM doctors";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo "Name: ".$row['doctor_name']."<br>";
    echo "Specialization: ".$row['specialization']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Email: ".$row['email']."<br><br>";
}
?>