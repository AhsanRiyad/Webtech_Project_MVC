<?php 
$loginStatusVar1 = 'loginPage';
$loginStatusVar2 = 'UserInfo';
include 'mvc/controller/controllSession.php';
$var1 = $_SERVER['PHP_SELF'];
echo $var1;

echo $_SERVER['REDIRECT_URL'];


?>




<?php 
 ?>


<!DOCTYPE html>
<html>
<head>	
	<?php 
	include 'lib/linker_files/linkerCss.php';
	include 'lib/linker_files/title.php';
	?>
</head>
<body>
	<?php 
	include 'mvc/view/header.php';
	include 'mvc/view/carousel.php';
	include 'mvc/view/Categories.php';
	include 'mvc/view/CategoriesNewProducts.php';
	include 'mvc/view/CategoriesBestSellingProducts.php';
	include 'mvc/view/CategoriesRecommendedProducts.php';
	?>
	<?php 
	include 'mvc/view/footer.php';
	include 'lib/linker_files/linkerJs.php'
	?>



	<!-- <script>
		window.history.pushState("object or string", "Title", "http://localhost/webtech_project/Webtech_Project_MVC/index.php");
	</script> -->
</body>
</html>