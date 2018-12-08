<?php 
include APP_ROOT.'lib/linker_files/headerAllTogether.php';



if($pageName == 'index')
{
	include APP_ROOT.'mvc/controller/controllerIndex.php';
}


include APP_ROOT.'lib/linker_files/footerAllTogether.php';
?>