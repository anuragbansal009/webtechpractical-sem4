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
	<title>User Login</title>
</head>

<body>

	<br><br>
	<div style="background-color: black;">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2">
						<p style="font-size: 35px; color: #03BFB5;"><b>User Login</b></p>
					</td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input class="input" type="text" name="phone" placeholder="Enter Phone" required></td>
					<br>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
			</table>
			<br>
			<input class="button" style="text-decoration: none;  font-size: 25px; color: black" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: #03BFB5;"><b>New User?</b></td>
				<td style="color: #03BFB5;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: black" href="user_signup.php">Sign Up</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: black" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
</body>

</html>