<html>
<head>
<title>Vulnerable : Session Cookie HttpOnly</title>
</head>
<body>
<?php setcookie('value', 'secret_cookie', "", "", "", "", false); ?>
<iframe src="javascript:document.location='http://localhost:8089/bad_session_httponly.php?cookie='+document.cookie"></iframe>
</body>
</html>
