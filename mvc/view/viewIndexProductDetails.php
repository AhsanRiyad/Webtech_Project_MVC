<div class="container">
	<div class="row justify-content-center">
		<div class="col-4">
			<img class="img-fluid" src=<?php echo $indexProductImageUrl; ?> alt="">
			<hr>
			<h3>Name: <?php echo $row['name']; ?></h3>
			<h4>Price: <?php echo $row['price']; ?></h4>
			<h5>Description: <?php echo $row['description']; ?></h5>
			<a href="#" class="btn btn-success mb-3">Add to Cart</a>
		</div>
	</div>
</div>