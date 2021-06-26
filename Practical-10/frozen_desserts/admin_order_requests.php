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
	<title>Order Requests</title>
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
		<li><a class="active" href="admin_order_requests.php">Order Requests</a></li>
		<li><a href="confirmed_orders.php">Confirmed Orders</a></li>
		<li><a href="admin_order_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; height:620px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box" style="background-color: white;">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center;"><b>Order Requests</b></p>
				</td>
				<tr>
					<th>Order ID</th>
					<th>Name</th>
					<th>Flavour</th>
					<th>Order Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "fd");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from user_orders";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[11]=='Waiting'){
				    		?>
				    		<td><?php echo $row[13]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[12]; }?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box" style="background-color: white">
				<tr>
					<td colspan="1">Enter Order ID:</td>
					<td colspan="2">
						<form action="confirm_order.php" method="post">
							<input type="number" name="order_id">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" style="font-size: 24px">Confirm</button>
  					<button type="submit" formaction="cancel_order.php" style="font-size: 24px">Cancel Order</button></td></form>	
				</tr>
			</table>
		</div>
	</body>
</html>