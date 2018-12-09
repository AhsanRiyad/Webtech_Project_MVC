<?php 
session_start();
define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/webtech_project/Webtech_Project_MVC/");
$rootAdress = 'http://localhost/webtech_project/Webtech_Project_MVC/';
include APP_ROOT.'lib/linker_files/db.php';

header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
// echo $obj->email;
$sql = "UPDATE `user` SET `email`='$obj->email',`mobile`='$obj->mobileNumber',`dob`='$obj->dob' WHERE id=$obj->id";


$statusResult = mysqli_query($conn, $sql);

// $result = mysqli_query($conn, $sql);
$sql = "SELECT * FROM `user` WHERE id=$obj->id";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sArray = $row;
//echo json_encode($row);
$_SESSION['UserInfo'] = $row;
echo 'Profile Updated';
mysqli_close($conn);
?>
