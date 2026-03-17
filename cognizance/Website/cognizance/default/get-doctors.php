<?php
require 'db.php';

$hospital_id = $_POST['hospital_id'];
$speciality = $_POST['speciality'];

$stmt = $conn->prepare("SELECT id, full_name FROM doctor_details WHERE hospital_id=? AND degree=? AND verified_status='verified'");
$stmt->bind_param("is",$hospital_id,$speciality);
$stmt->execute();

$result = $stmt->get_result();

$data = [];

while($row = $result->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);
?>