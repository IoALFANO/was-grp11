<?php 
header('Access-Control-Allow-Origin: *');
if(!isset($_COOKIE['ID'])){
$id = 'A';// A = 1010
setcookie("ID", $id, "", "", "localhost", false, false); }?>
<html>
<head>
<title>Vulnerable : Session ID Length</title>
</head>
<body>
  <?php 
  if(isset($_GET['id'])){
  $connection=mysqli_connect("localhost", "admin", "admin", "was");
	if (!$connection){
    		echo "Connection impossible";
	}
	else {
	$find = false;
	$req = 'SELECT * FROM session_length4 WHERE sessionID="'.$_GET['id'].'";';
    		$user = mysqli_query($connection, $req);
    		while($rowUser = mysqli_fetch_assoc($user)){
    			if(strcmp($rowUser['sessionID'],$_GET['id']) === 0) {
    			echo 'Welcome '.$rowUser['email'].'! Your session ID is actually '.$_GET['id'];
    			$find= true;
    			}
    			else {echo "Wrong session ID !";
    			header('HTTP/1.0 401 Unauthorized');}
    		}if(!$find) echo "No matches found.";
	}  
  }
  else echo "Please add a session ID. Ex : <b>?id=A</b>";?>
</body>
</html>
