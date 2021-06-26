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
	<title>Forgot Password</title>
</head>

<body>
	<?php $email = 0;
	$dob = 0;
	?>
	<br><br><br><br><br><br><br>
	<div style="background-color: black;">
		<table>
			<tr>
				<td colspan="2">
					<p style="font-size: 35px; color: #03BFB5;"><b>User Forgot Password</b></p>
				</td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
				<tr>
					<td>Enter User Email address: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email Address" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Enter Date Of Birth:</td>
					<td> <input class="input" type="date" name="dob" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input class="button" style="text-decoration: none;  font-size: 25px; color: black" type="submit" value="Recover Password"></td>
				</tr>
			</form>
		</table>
</body>

</html>