<div class="container">
	<div class="row justify-content-center">
		<div class="col-4">
			<img class="img-fluid" src=<?php echo $indexProductImageUrl; ?> alt="">
			<hr>
			<h3>Name: <?php echo $row['name']; ?></h3>
			<h4>Price: <?php echo $row['price']; ?></h4>
			<h5>Description: <?php echo $row['description']; ?></h5>

			<h6><?php if($loginStatus == false)
			{
				echo "<h6 class='text-danger'>Please log in to buy</h6>";
			} ?></h6>
			
			<b>Quantity:  </b>



			<select class="px-4 disabled" <?php if($loginStatus == false)
			{
				echo 'disabled bg-danger';
			} ?> name="productQuantity">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>

		<div>
			<a onclick="jsFuntionAddToCart(this)" href="#" class="btn btn-success mb-3 mt-2 <?php if($loginStatus == false)
			{
				echo 'disabled bg-danger';
			} ?>" >Add to Cart</a>
		</div>
	</div>
</div>
</div>


<script>

	var x = document.getElementsByName("productQuantity");
	var quantity = x[0].value;
	

	function jsFuntionAddToCart(event){

		<?php 
		$sArray = $_SESSION[$SessionCheckUserInfo];	
		?>



		jsProfileInfo = {  userId: <?php echo $sArray['id']; ?> , qunatity: quantity , productId : <?php echo $id; ?> };

		jsonStringDbParam = JSON.stringify(jsProfileInfo);	




		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var msg = this.responseText;
				alert(msg);
			}
		};

		xhttp.open("POST", "http://localhost/webtech_project/Webtech_Project_MVC/mvc/model/modelAjaxIndexAddToCart.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('x=' + jsonStringDbParam);




	}


</script>