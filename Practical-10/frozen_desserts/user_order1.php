<html>
	<?php
		$conn = new mysqli("localhost","root","", "fd");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$flav = $_POST["rooms"];
	$order_date = $_POST["order_date"];
	$chocolate_dip = isset($_POST["chocolate_dip"]) ? "true":"false";
	$oreo = isset($_POST["oreo"]) ? "true":"false";
	$m_and_m = isset($_POST["m_and_m"]) ? "true":"false";
	$caramel = isset($_POST["caramel"]) ? "true":"false";
	$brownie = isset($_POST["brownie"]) ? "true":"false";
	$hot_fudge = isset($_POST["hot_fudge"]) ? "true":"false";
	$in = strtotime($order_date);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$sql = "SELECT * FROM temp_session";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$phone = $row[0];
	$name = $row[2];
	$id = $row[4];
	$status = "Waiting";
	$price = 0;
	if(strcmp($flav, "Vanilla")==1)
	{
		$price = 1000;
	}
	else if(strcmp($flav, "Strawberry")==1)
	{
		$price = 1800;
	}
	else if(strcmp($flav, "Chocolate")==1)
	{
		$price = 3000;
	}
	$additional = 0;
	if(strcmp($chocolate_dip, "true")==0)
	{
		$additional = $additional + 300;
	}
	if(strcmp($oreo, "true")==0)
	{
		$additional = $additional + 150;
	}
	if(strcmp($m_and_m, "true")==0)
	{
		$additional = $additional + 300;
	}
	if(strcmp($caramel, "true")==0)
	{
		$additional = $additional + 120;
	}
	if(strcmp($brownie, "true")==0)
	{
		$additional = $additional + 250;
	}
	if(strcmp($hot_fudge, "true")==0)
	{
		$additional = $additional + 300;
	}
	$sqlt = "SELECT * from order_id";
	$result=mysqli_query($conn,$sqlt);
	$row=mysqli_fetch_row($result);
	$t = $row[0];
	$price = $price + $additional;
	$sql = "INSERT INTO user_orders VALUES ('$phone', '$name', '$id', '$flav', '$order_date', '$chocolate_dip', '$oreo', '$m_and_m', '$caramel', '$brownie', '$hot_fudge', '$status', '$price', '$t')";
	mysqli_query($conn, $sql);
	$t = $t + 1;
	$sqlt = "DELETE from order_id";
	mysqli_query($conn,$sqlt);
	$sqlt = "INSERT INTO order_id VALUES ('$t')";
	mysqli_query($conn,$sqlt);
	header("Location: user_order2.php");
	?>
</html>