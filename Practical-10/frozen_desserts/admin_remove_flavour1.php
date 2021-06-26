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
	<div style="margin-left:25%; height:500px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box" style="background-color: white;">
				<tr>
					<td>Order removed successfully</td>
				</tr>
				<tr>
				<td>
					<P>Click Next to get redirected to home page </p>
				</td>
			</tr>
			<tr>
				<td>
					<center><a href="admin_view.php" style="width: 20%; text-align: center; color: white; text-decoration: none; background-color: black; margin-top: 20px; padding: 15px">Next</a>
					</center>
				</td>
			</tr>
			</table>
		</div>
	</body>
</html>