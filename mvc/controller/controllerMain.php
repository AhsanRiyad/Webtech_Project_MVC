<?php 

include (APP_ROOT.'mvc/controller/controllSession.php');
include APP_ROOT.'lib/linker_files/headerAllTogether.php';
include APP_ROOT.'lib/linker_files/db.php';

include APP_ROOT.'mvc/view/viewHeader.php';
if($pageName == 'index')
{	
	include APP_ROOT.'mvc/controller/controllerIndex.php';
}
if($pageName == 'login')
{
	include APP_ROOT.'mvc/controller/controllerLogin.php';
}
include APP_ROOT.'lib/linker_files/footerAllTogether.php';
?>