<?php 


include APP_ROOT.'lib/linker_files/headerAllTogether.php';
include APP_ROOT.'lib/linker_files/db.php';

if($pageCategory=='visibleToAll')
{
include (APP_ROOT.'mvc/controller/controllSession.php');
include APP_ROOT.'mvc/view/viewHeader.php';
if($pageName == 'index')
{	
	include APP_ROOT.'mvc/controller/controllerIndex.php';
}
if($pageName == 'login')
{
	include APP_ROOT.'mvc/controller/controllerLogin.php';
}
if($pageName == 'registration')
{
	include APP_ROOT.'mvc/controller/controllerReg.php';
}
include APP_ROOT.'lib/linker_files/footerAllTogether.php';
}



if($pageCategory=='visibleToRegistered')
{
include (APP_ROOT.'mvc/controller/controllSessionDashBoard.php');
include APP_ROOT.'mvc/view/viewHeaderDashBoard.php';
if($pageName == 'dashboard')
{
	include APP_ROOT.'mvc/controller/controllerDashBoard.php';
}
}
?>