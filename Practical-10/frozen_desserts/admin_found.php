<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/err.css">
	<link rel="icon" href="favicon.ico">
	<script src="js/script.js"></script>
	<title>Admin Found</title>
</head>

<body>
	<br><br>
	<div style="background-color: #f2f2f2;">
		<?php
			$conn = new mysqli("localhost","root","", "fd");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<button style="font-size: 30px"><a href="admin_login.php" style="text-decoration: none; color: black">Redirect to Admin Login</a></button>
	</div>
</body>
</html>