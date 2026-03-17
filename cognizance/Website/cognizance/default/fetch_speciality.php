<?php
require 'db.php';

if(isset($_POST['hospital_id'])){
    $hospital_id = intval($_POST['hospital_id']);
    $specialities = [];

    $stmt = $conn->prepare("SELECT DISTINCT degree FROM doctor_details WHERE hospital_id=? AND verified_status='verified'");
    $stmt->bind_param("i",$hospital_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
        $specialities[] = $row;
    }

    echo json_encode($specialities);
}
?>