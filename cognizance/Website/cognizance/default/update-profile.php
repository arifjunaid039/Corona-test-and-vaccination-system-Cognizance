<?php
session_start();
require 'db.php';

if(!isset($_SESSION['patient'])){
header("Location: login.php");
exit();
}

$patient_id = $_SESSION['patient'];

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

if(!empty($password)){

$password_hash = password_hash($password,PASSWORD_BCRYPT);

$stmt = $conn->prepare("UPDATE patients SET full_name=?,email=?,phone=?,address=?,password=? WHERE id=?");
$stmt->bind_param("sssssi",$full_name,$email,$phone,$address,$password_hash,$patient_id);

}else{

$stmt = $conn->prepare("UPDATE patients SET full_name=?,email=?,phone=?,address=? WHERE id=?");
$stmt->bind_param("ssssi",$full_name,$email,$phone,$address,$patient_id);

}

$stmt->execute();

header("Location: profile.php?updated=1");
exit();
?>