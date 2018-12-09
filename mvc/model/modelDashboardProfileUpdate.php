<?php 
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["jsProfileInfo"], false);
echo $obj->email;

 ?>
