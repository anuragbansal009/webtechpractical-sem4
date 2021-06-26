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
	<title>Sign Up</title>
</head>

<body>
	<br><br><br><br>
	<div style="background-color: black;">
		<form action="user_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2">
						<p style="font-size: 35px; color: #03BFB5"><b>New User Sign Up</b></p>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Name: </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Phone Number: </td>
					<td><input class="input" type="text" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Password: </td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Email ID: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Verify Via: </td>
					<td><input class="input" type="text" name="confirm_account" placeholder="Verify Account Via" required></td>
				</tr>
				<tr>
					<td style="padding-left: 40px; text-align: left;">Date of birth: </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2">
						<input class="button" style="text-decoration: none; font-size: 25px; color: black" type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>