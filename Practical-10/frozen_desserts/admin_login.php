<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="icon" href="favicon.ico">
	<script src="js/script.js"></script>
	<title>Admin Login</title>
</head>

<body>
	<br><br>
	<br><br>

	<br>
	<div style="background-color: black;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #03BFB5"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter User ID" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter Password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="text-decoration: none;  font-size: 25px; color: black" type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #03BFB5;"><b>New Admin?</b></td>
				<td style="color: #03BFB5;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: black" href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: black" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>