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
	<title>Remove Flavours</title>
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
		<li><a class="active" href="admin_remove_flavours.php">Remove Flavour</a></li>
		<li><a href="admin_order_requests.php">Order Requests</a></li>
		<li><a href="confirmed_orders.php">Confirmed Orders</a></li>
		<li><a href="admin_order_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; height:750px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "fd");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from order_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box" style="background-color: white">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center;">Remove Flavours</p></th>
				</tr>
				<tr>
					<th>Flavour</th>
					<th>Available</th>
					<th>Delivering</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr align="center">
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br>
			<form class="basic_box" action="admin_remove_flavour.php" method="post" style="background-color: white">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select flavour:</td>
					<td style="text-align: left;">
						<select name="rooms" style="font-size:24px" required>
							<option value="">Select</option>
							<option value="Vanilla">Vanilla</option>
							<option value="Strawberry">Strawberry</option>
							<option value="Chocolate">Chocolate</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to remove:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofflavours" id="rooms" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" value="Submit" style="font-size: 24px">
					</td>
				</tr>
			</table>
			</form>
	</div>
</body>
</html>