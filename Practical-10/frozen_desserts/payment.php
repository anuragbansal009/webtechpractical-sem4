<html>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "fd");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["order_id"];
		$sql = "SELECT * from confirmed_order";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[12])
			{	
				$sql1 = "SELECT * FROM balance";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				$r[0] = $r[0] + $row[11];
				$sql2 = "DELETE FROM balance";
				mysqli_query($conn, $sql2);
				$sql2 = "INSERT INTO balance VALUES ('$r[0]')";
				mysqli_query($conn, $sql2);
				$sql2 = "INSERT INTO order_hist VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]')";
				mysqli_query($conn, $sql2);
				$sql2 = "DELETE FROM confirmed_order WHERE order_id='$bid'";
				mysqli_query($conn, $sql2);
				$sql2 = "UPDATE order_count SET available_orders = available_orders+1, ongoing_orders = ongoing_orders-1 WHERE flavour='$row[3]'";
				mysqli_query($conn, $sql2);
				header("Location: payment1.php");
			}
		}
	?>
</body>
</html>