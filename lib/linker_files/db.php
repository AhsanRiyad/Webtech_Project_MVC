<?php 

$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'webtech';

$conn = mysqli_connect($hostName, $userName, $password , $databaseName);


?><!-- $sql = "SELECT `orderId`, `orderDate`, `orderStatus`, `userId` FROM `orderproduct` WHERE userId='$email' , orderDate='$date' -->