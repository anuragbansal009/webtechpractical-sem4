<html>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "fd");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["order_id"];
		$sql = "SELECT * from user_orders";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[15])
			{				
				$sql1 = "DELETE FROM user_orders WHERE order_id='$bid'";
				mysqli_query($conn,$sql1);
				header("Location: user_cancel_order1.php");
				break;
			}
		}
	?>
</body>
</html>