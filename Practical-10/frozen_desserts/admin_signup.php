<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="favicon.ico">
	<script src="js/script.js"></script>
	<title>Admin Sign Up</title>
</head>

<body>
	<br><br><br><br><br>
	<div style="background-color: black;">
		<form action="admin_signup.php" method="post">
			<table>
				<tr>
					<td colspan="2">
						<p style="font-size: 35px; color: #03BFB5;"><b>Admin Sign Up</b></p>
					</td>
				</tr>
				<tr>
					<td>User ID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter User ID" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td>Employee ID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter Employee ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="button" style="font-size: 25px; text-decoration: none; color: black;" type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>