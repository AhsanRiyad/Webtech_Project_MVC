<?php
	// $target_dir = "img/";
	// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	// $uploadOk = 1;
	// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	


	if( isset($_POST['submit'])){
		$isbn 	= trim($_POST['nameInputIsbnProductPageSeller']); 
		$name 	= trim($_POST['nameInputNameProductPageSeller']);
		$price 	= trim($_POST['nameInputPriceProductPageSeller']);
		$category = trim($_POST['nameInputCategoryProductPageSeller']);
		$quantity = trim($_POST['nameInputQuantityProductPageSeller']);
		$description = trim($_POST['nameInputDescriptionProductPageSeller']);

		$sellerId = "riyad123@gmail.com";

		// // Check if image file is a actual image or fake image
		// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  //  		if($check !== false) {
  //       	echo "File is an image - " . $check["mime"] . ".";
  //      		$uploadOk = 1;
  //   	} 
  //   	else {
	 //        echo "File is not an image.";
	 //        $uploadOk = 0;
	 //    }

	 //    // Check if file already exists
	 //    if (file_exists($target_file)) {
  //   		echo "Sorry, file already exists.";
  //   		$uploadOk = 0;
		// }

		// // Check file size
		// if ($_FILES["fileToUpload"]["size"] > 500000) {
  //   		echo "Sorry, your file is too large.";
  //   		$uploadOk = 0;
		// }

		// // Allow certain file formats
		// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  //   		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  //   		$uploadOk = 0;
		// }

		// // Check if $uploadOk is set to 0 by an error
		// if ($uploadOk == 0) {
  //   		echo "Sorry, your file was not uploaded.";
		// // if everything is ok, try to upload file
		// } 
		// else {
  //   		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //       		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  //   		} 
  //   		else {
  //       	echo "Sorry, there was an error uploading your file.";
  //   		}
		// }


			//header('location: 1.php?error=Null_found');
		if($isbn == "" || $name == "" || $price == "" || $category == "" || $quantity == "" || $description == ""){
			echo "Null found!";
		}else{
		 	$date = date("Y-m-d");


		 	$sql = "INSERT INTO `product`(`isbn`, `sellerId`, `name`, `price`, `category`, `total`, `description`, `date`) VALUES ('$isbn','$sellerId','$name',$price,'$category',$quantity,'$description','$date')";

		 	//echo $sql;
		 	mysqli_query($conn,$sql);
		 	//$conn->query($sql);
		 	
		 	mysqli_close($conn);
		}
	}
	
?>