<?php
require 'db.php';
if(isset($_POST['hospital_id'], $_POST['speciality'])){
    $hospital_id = intval($_POST['hospital_id']);
    $speciality = trim($_POST['speciality']);
    $doctors = [];
    $stmt = $conn->prepare("SELECT id, full_name FROM doctor_details WHERE hospital_id=? AND degree=? AND verified_status='verified'");
    $stmt->bind_param("is", $hospital_id, $speciality);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        $doctors[] = $row;
    }
    echo json_encode($doctors);
}
?>