<?php
session_start();
if(!isset($_SESSION['UserInfo']))
{
  header('location: alert.php');
}
else
{
  $sArray = $_SESSION['UserInfo'];
}

?>