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
			if($bid==$row[13])
			{
				$flav = $row[3];
				$sql1 = "SELECT * FROM order_count WHERE flavour='$flav'";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				if($r[1]>0)
				{
					$r[1] = $r[1] - 1;
					$sql2 = "UPDATE order_count SET available_orders='$r[1]' WHERE flavour='$flav'";
					mysqli_query($conn, $sql2);
					$r[2] = $r[2] + 1;
					$sql2 = "UPDATE order_count SET ongoing_orders='$r[2]' WHERE flavour='$flav'";
					mysqli_query($conn, $sql2);
					$sql2 = "UPDATE user_orders SET status='Confirmed' WHERE order_id='$bid'";
					mysqli_query($conn, $sql2);
					$sql2 = "INSERT INTO confirmed_order VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[12]','$row[13]')";
					mysqli_query($conn, $sql2);
					$sql2 = "DELETE FROM user_orders WHERE order_id='$bid'";
					mysqli_query($conn, $sql2);
					header("Location: confirm_order1.php");
				}
				else
				{
					header("Location: confirm_order2.php");
				}
			}
		}
	?>
</body>
</html>