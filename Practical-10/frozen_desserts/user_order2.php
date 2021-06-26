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
	<title>Confirm Order</title>
</head>
<style>
	.basic_box {
		margin-top: 3%;
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
	<div style="margin-left:25%;">
		<table class="basic_box" style="background: white">
			<tr>
				<td>
					Order Request is submitted successfully!<br>Now wait for the Admin to confirm the request.</p>
					<P><br>Click Next to get redirected to home page </p><br>
					<center><a href="user_view.php" style="width: 20%; text-align: center; color: white; text-decoration: none; background-color: black; margin-top: 20px; padding: 15px">Next</a>
					</center>
				</td>
			</tr>
		</table>
	</div>

</body>

</html>