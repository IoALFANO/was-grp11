<html>
<head>
	<title>Def : Password</title>
</head>
<body>
<h1>Enter the password of Admin account :</h1>
<form method="get" action="def_password.php">
			<label>Password</label> <input type="text" name="password">
			<input type="submit" value="Log in">
</form>
<?php
if (isset($_GET['password'])) {
	$connection=mysqli_connect("localhost", "admin", "admin", "was");
	if (!$connection){ //Si la connexion n'a pas été effectué
    		echo "Connection impossible";
	}
	else {
		//$salt = bin2hex(openssl_random_pseudo_bytes(22));
		//$hash = crypt($_GET['password'], "$2a$12$".$salt);
		$pswAdmin = mysqli_query($connection, "SELECT pswd FROM users WHERE email='adminH@example.com';");
		while($rowPswAdmin = mysqli_fetch_assoc($pswAdmin)){
			$hashAdmin = $rowPswAdmin['pswd']; 
			if(crypt($_GET['password'], $hashAdmin) == $hashAdmin) echo "You are log in !";
			else echo "Wrong password !";
		}	
	}
}
?>
</body>
</html>
