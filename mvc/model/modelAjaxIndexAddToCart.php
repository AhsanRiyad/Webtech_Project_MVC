<?php 
include '../controller/controllerRootPath.php';
include APP_ROOT.'lib/linker_files/linkerForController.php';



header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
// echo $obj->email;

$sql = "INSERT INTO `cart`(`productId`, `quantity`, `userId`) VALUES ('$obj->productId','$obj->quantity','$obj->email')";

$statusResult = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `cart` WHERE userId= '$obj->email'";
$result = mysqli_query($conn, $sql);
$i = 0;
while($row = mysqli_fetch_assoc($result)){
	$i++;
}

$myArr = array($i);
$myJSON = json_encode($myArr);
echo $myJSON;
// $result = mysqli_query($conn, $sql);
mysqli_close($conn);

 ?>