<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="css/account.css">
	<link rel="icon" href="favicon.ico">
	<script src="js/script.js"></script>
	<title>Order History</title>
</head>

<body>
	<header>
		<table class="header" style="width: 100%;" cellspacing="0" cellpadding="0">
			<tr>
				<td id="td1" style="font-size: 48px;"><a href="index.php" style="text-decoration: none; color: white;">
						<p style="color: #5383d3; display: inline;">FROZEN</p> DESSERTS
					</a></td>
			</tr>
		</table>
	</header>
	<ul>
		<li><a href="admin_view.php">Order Info</a></li>
		<li><a href="add_flavours.php">Add Flavour</a></li>
		<li><a href="admin_remove_flavours.php">Remove Flavour</a></li>
		<li><a href="admin_order_requests.php">Order Requests</a></li>
		<li><a href="confirmed_orders.php">Confirmed Orders</a></li>
		<li><a class="active" href="admin_order_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "fd");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$bid = $_POST["order_id"];
			$sql = "SELECT * FROM order_hist WHERE order_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
		?>
			<table class="basic_box" style="background-color: white">
				<tr>
					<th colspan="2">Booking History</th>
				</tr>
				<tr>
					<td>Order ID: </td>
					<td><?php echo $row[12]; ?></td>	
				</tr>
				<tr>
					<td>Name: </td>
					<td><?php echo $row[1]; ?></td>	
				</tr>
				<tr>
					<td>Flavour: </td>
					<td><?php echo $row[3]; ?></td>	
				</tr>
				<tr>
					<td>Order Date: </td>
					<td><?php echo $row[4]; ?></td>	
				</tr>
				<tr>
					<td>Total Bill Amount: </td>
					<td><?php echo $row[11]; ?></td>	
				</tr>
				<tr>
					<td>Chocolate Dip: </td>
					<td><?php if(strcmp($row[5], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Oreo: </td>
					<td><?php if(strcmp($row[6], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>M&M's: </td>
					<td><?php if(strcmp($row[7], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Caramel: </td>
					<td><?php if(strcmp($row[8], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Brownie: </td>
					<td><?php if(strcmp($row[9], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Hot Fudge: </td>
					<td><?php if(strcmp($row[10], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
				<td colspan="2" align="center"><button style="background: black; font-size: 20px"><a href="admin_order_history.php" style="text-decoration: none; color: white;"> Back</a></button></td>
				</tr>
			</table>
		</div>
	</body>
</html>