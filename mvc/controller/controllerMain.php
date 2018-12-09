<?php 


include APP_ROOT.'lib/linker_files/headerAllTogether.php';
include APP_ROOT.'lib/linker_files/db.php';
include APP_ROOT.'mvc/controller/controllerPagesUrlList.php';

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
include (APP_ROOT.'mvc/controller/controllSessionDashboard.php');
include APP_ROOT.'mvc/view/viewHeaderDashboard.php';
if($pageName == 'dashboardHome')
{
	include APP_ROOT.'mvc/controller/controllerHomeDashboard.php';
}
if($pageName == 'dashboardProfile')
{
	include APP_ROOT.'mvc/controller/controllerProfileDashboard.php';
}
if($pageName == 'dashboardProfileUpdate')
{
	include APP_ROOT.'mvc/controller/controllerProfileUpdateDashboard.php';
}
include APP_ROOT.'lib/linker_files/linkerJs.php';
}
?>