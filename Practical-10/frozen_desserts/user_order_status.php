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
	<title>Order Status</title>
</head>
<style>
	input,
	select {
		font-size: 16px;
		text-align: center;
	}

	th {
		font-size: 16px;
		font-weight: bold;
	}

	td {
		font-size: 16px;
		font-weight: normal;
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
		<li><a href="user_order.php">Order</a></li>
		<li><a class="active" href="user_order_status.php">Show Order Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_order_history.php">Order History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; height:500px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<table class="basic_box" style="background: white">
			<tr>
				<td colspan="7">
					<p style="font-size: 32px; text-align: center;"><b>Order Status</b></p>
				</td>
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Flavour</th></th>
				<th>Order Date</th>
				<th>Status</th>
				<th>Price</th>
			</tr>
			<tr>
				<?php
				$conn = new mysqli("localhost", "root", "", "fd");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql1 = "SELECT * from user_orders";
				$sql = "SELECT * from temp_session";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_row($result);
				$phone = $row[0];
				$confirm_account = $row[4];
				if ($result = mysqli_query($conn, $sql1)) {
					while ($row = mysqli_fetch_row($result)) {
						if ($phone == $row[0] && $confirm_account == $row[2]) {
				?>
							<td><?php echo $row[13]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><?php echo $row[11]; ?></td>
							<td><?php echo $row[12]; ?></td>
			</tr><?php
						}
					}
					mysqli_free_result($result);
				}
					?>
		</table><br><br>
		<table class="basic_box" style="background: white">
			<tr>
				<td></td>
				<td colspan="1">Enter Order ID:</td>
				<td colspan="2">
					<form action="user_cancel_order.php" method="post">
						<input type="number" name="order_id">
				</td>
				<td style="text-align: center;"><button type="submit" style="font-size: 16px">Cancel Order</button></td>
				</form>
			</tr>
		</table>
	</div>
</body>

</html>