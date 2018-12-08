<?php 
$php_self =  $_SERVER['PHP_SELF'];
$pageName = 'index';
include 'mvc/controller/controllerRootPath.php';
$loginStatusVar1 = 'loginPage';
$loginStatusVar2 = 'UserInfo';
include (APP_ROOT.'mvc/controller/controllSession.php');
include APP_ROOT.'mvc/controller/controllerMain.php';
?>

