<html>
<body><?php
	$conn = new mysqli("localhost","root","", "fd");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$confirm_account = $_POST["confirm_account"];
	$dob = $_POST["dob"];
	$sql = "INSERT INTO user_login(phone, password, name, email, confirm_account, dob) VALUES('$phone', '$password', '$name', '$email', '$confirm_account', '$dob')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>
</body>
</html>