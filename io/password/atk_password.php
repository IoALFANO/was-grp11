<html>
<head>
	<title>Atk : Password</title>
</head>
<body>
<h1>Enter the password of Admin account :</h1>
<form method="get" action="atk_password.php">
			<label>Password</label> <input type="text" name="password">
			<input type="submit" value="Log in">
</form>
<?php
if (isset($_GET['password'])) {
	$connection=mysqli_connect("localhost", "admin", "admin", "was");
	if (!$connection){
    		echo "Connection impossible";
	}
	else {
    		$pswAdmin = mysqli_query($connection, "SELECT pswd FROM users WHERE email='admin@example.com';");
    		while($rowPswAdmin = mysqli_fetch_assoc($pswAdmin)){
    			if($rowPswAdmin['pswd'] === md5($_GET['password'])) echo "You are log in !";
    			else echo "Wrong password !";
    		}	
	}
}
?>
</body>
</html>
