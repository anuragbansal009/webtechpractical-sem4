<html>
<?php
	$conn = new mysqli("localhost","root","", "fd");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$num = $_POST["noofflavours"];
	$r = $_POST["rooms"];
	$sql = "UPDATE order_count SET available_orders = available_orders+$num WHERE flavour='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: add_flavours1.php");
	}
?>
</html>