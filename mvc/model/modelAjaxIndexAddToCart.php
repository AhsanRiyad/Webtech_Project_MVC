<?php 
include '../controller/controllerRootPath.php';
include APP_ROOT.'lib/linker_files/linkerForController.php';



header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
// echo $obj->email;

$sql = "INSERT INTO `cart`(`productId`, `quantity`, `userId`) VALUES ('obj->productId','obj->qunatity','obj->userId')";


$statusResult = mysqli_query($conn, $sql);

// $result = mysqli_query($conn, $sql);
echo 'Cart Updated';
mysqli_close($conn);

 ?>