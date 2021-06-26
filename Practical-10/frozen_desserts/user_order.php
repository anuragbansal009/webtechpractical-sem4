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
	<title>Order</title>
</head>
<style>
	input,
	select {
		font-size: 22px;
		text-align: center;
	}
</style>

<body>
	<?php
	$conn = new mysqli("localhost", "root", "", "fd");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * from temp_session";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result); ?>
	<header>
		<table class="header" style="width: 100%;" cellspacing="0" cellpadding="0">
			<tr>
				<td id="td1" style="font-size: 48px;"><a href="index.php" style="text-decoration: none; color: white;"><p style="color: #5383d3; display: inline;">FROZEN</p> DESSERTS</a></td>
				<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
			</tr>
		</table>
	</header>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a class="active" href="user_order.php">Order</a></li>
		<li><a href="user_order_status.php">Show Order Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_order_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; height:1280px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<table class="basic_box" style="background: white" align="center">
			<tr>
				<th colspan="3">
					<p style="font-size: 38px; text-align: center;">Flavour Details</p>
				</th>
			</tr>
			<tr>
				<th align="left">Flavour Type</th>
				<th align="left">Price</th>
			</tr>
			<tr>
				<td>Vanilla</td>
				<td>1000</td>
			</tr>
			<tr>
				<td>Strawberry</td>
				<td>1800</td>
			</tr>
			<tr>
				<td>Chocolate</td>
				<td>3000</td>
			</tr>
		</table><br><br>
		<form class="basic_box" action="user_order1.php" method="post" style="background: white">
			<table align="center">
				<br><br>
				<tr>
					<td style="text-align: left;">Select flavour type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="vanilla">Vanilla</option>
							<option value="strawberry">Strawberry</option>
							<option value="chocolate">Chocolate</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter order date:</td>
					<td style="text-align: left;">
						<input type="date" name="order_date">
					</td>
				</tr>
			</table>
			<table align="center">
				<br>
				<tr>
					<th width="40%">Toppings</th>
					<th width="40%">Price</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="chocolate_dip" value="on">Chocolate Dip</td>
					<td style="text-align: center;">300</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="oreo" value="on">Oreo</td>
					<td style="text-align: center;">150</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="m_and_m" value="on">M&M's</td>
					<td style="text-align: center;">300</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="caramel" value="on">Caramel</td>
					<td style="text-align: center;">120</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="brownie" value="on">Brownie</td>
					<td style="text-align: center;">250</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="hot_fudge" value="on">Hot Fudge</td>
					<td style="text-align: center;">300</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>