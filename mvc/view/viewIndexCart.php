<?php  
	$userId = "makaium33@gmail.com";

	
	$hostName = 'localhost';
	$userName = 'root';
	$password = '';
	$databaseName = 'webtech';
	$conn = mysqli_connect($hostName, $userName, $password , $databaseName);

	$sql1 = "SELECT `productName`, `description`, `productId`, `quantity` FROM `cart` WHERE `userId` = '$userId'";

	//$sql2 = "SELECT `productId` FROM `cart` WHERE `userId` = '$userId'";


	//echo $sql;
	$productIdQuantity = mysqli_query($conn,$sql1);
		

	echo "<table border='1'>
	<tr>
	<th>Name</th>
	<th>Description</th>
	<th>Quantity</th>
	<th>Price</th>
	</tr>";

	$totalPrice = 0;

	while($row = mysqli_fetch_assoc($productIdQuantity)){
		echo "<tr>";
		echo "<td>" . $row['productName'] . "</td>";
		echo "<td>" . $row['description'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		$price = $row['quantity'] * $row['price'];
		echo "<td>" . $price . "</td>";

		$totalPrice = $totalPrice + $price;
		echo "</tr>";
	}
	echo "<tr>";
	echo "<td colspan=4>" . $totalPrice . "</td>";
	echo "</tr>";

	echo "</table>";

	mysqli_close($conn);
	
?>


<div class="container">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				
				<th scope="col">Name</th>
				<th scope="col">Short Description</th>
				<th scope="col">Quantity</th>
				<th scope="col">Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				
				<td>iPhone</td>
				<td>Apple's iPhone imported from USA</td>
				<td>1</td>
				<td>60000</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				
				<td>iPhone</td>
				<td>Apple's iPhone imported from USA</td>
				<td>1</td>
				<td>60000</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>iPhone</td>
				<td>Apple's iPhone imported from USA</td>
				<td>1</td>
				<td>60000</td>
			</tr>
	
			<tr>
				<th scope="row"></th>
				<td></td>
				<td></td>
				<td>Total Amount:</td>
				<td>180000</td>
			</tr>
		</tbody>
	</table>
	
	<hr>
	<a href="checkout.php" class="btn btn-warning">Proceed To Checkout</a>
	<a href="index.php" class="btn btn-info">Continue Shopping</a>
</div>