<?php 
include 'mvc/controller/controllerRootPath.php';
echo APP_ROOT.'mvc/controller/controllSession.php';
$loginStatusVar1 = 'loginPage';
$loginStatusVar2 = 'UserInfo';
include (APP_ROOT.'mvc/controller/controllSession.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
	include APP_ROOT.'lib/linker_files/linkerCss.php';
	include APP_ROOT.'lib/linker_files/title.php';
	?>
</head>
<body>
	<?php 
	include APP_ROOT.'mvc/view/header.php';
	include APP_ROOT.'mvc/view/carousel.php';
	include APP_ROOT.'mvc/view/Categories.php';
	include APP_ROOT.'mvc/view/CategoriesNewProducts.php';
	include APP_ROOT.'mvc/view/CategoriesBestSellingProducts.php';
	include APP_ROOT.'mvc/view/CategoriesRecommendedProducts.php';
	?>
	<?php 
	include APP_ROOT.'mvc/view/footer.php';
	include APP_ROOT.'lib/linker_files/linkerJs.php'
	?>	
	<!-- <script>
		window.history.pushState("object or string", "Title", "http://localhost/webtech_project/Webtech_Project_MVC/index.php");
	</script> -->
</body>
</html>