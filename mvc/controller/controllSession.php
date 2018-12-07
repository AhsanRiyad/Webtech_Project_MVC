<?php
session_start();
$loginStatus = false;

if(isset($link_status)){
  if($link_status == $loginStatusVar1)
  {
    unset($_SESSION[$loginStatusVar2]);
  }
}
if(isset($_SESSION[$loginStatusVar2]))
{
  $loginStatus = true;
}
?>