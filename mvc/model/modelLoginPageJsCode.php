<!-- body ends-->
<?php 
if ($msg == 'successful') {


	?>
	<script type="text/javascript"> window.location.replace("admin_home.php");
</script>

<?php 

}
else if($msg == 'login failed')
{
	?>

	<script type="text/javascript">
		var i = document.getElementById('login_id');
		i.innerHTML = 'Email/Password does not match';
		i.classList.remove('text-dark');
		i.classList.add('text-white' , 'bg-danger');

	</script>


	<?php 	
}

?>