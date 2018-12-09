<?php
session_start();
if(!isset($_SESSION[$SessionCheckUserInfo]))
{
  header('location: alert.php');
}
else
{
  $sArray = $_SESSION[$SessionCheckUserInfo];
}

?>