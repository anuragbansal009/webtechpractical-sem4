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
	<title>Order Confirmed</title>
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
	<br><br>
	<div style="margin-left:25%;">
		<table class="basic_box" style="background: white">
			<tr>
				<td>
					<p>Order has been confirmed successfully.<br></p>
					<P><br>Click Next to get redirected to home.</P>
					<center><a href="admin_view.php" style="width: 20%; text-align: center; color: white; text-decoration: none; background-color: black; margin-top: 20px; padding: 15px">Next</a>
					</center>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>