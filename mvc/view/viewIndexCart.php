<?php 
$sArray = $_SESSION[$SessionCheckUserInfo];	
$email = $sArray['email'];
$sql = "SELECT * FROM `cart` WHERE userId='$email'";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
$i = 0;
$totalPrice = 0;
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

			<?php 
			while($row = mysqli_fetch_assoc($result)){
				$i++;
				$totalPrice += $row['price']*$row['quantity'];
				?>

				<tr>
					<th scope="row"><?php echo $i; ?></th>

					<td><?php echo $row['productName']; ?></td>
					<td><?php echo $row['descripition']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['price']*$row['quantity']; ?></td>
				</tr>

				



			<?php }
			?>

			<tr>
				<th scope="row"></th>
				<td></td>
				<td></td>
				<td>Total Amount:</td>
				<td><?php echo $totalPrice; ?></td>
				

			</tr>


		</tbody>
	</table>
	
	<hr>
	<a href="<?php echo $indexUrl; ?>" class="btn btn-warning text-white">Confirm</a>
	<a href="<?php echo $indexUrl; ?>" class="btn btn-info">Continue Shopping</a>
</div>