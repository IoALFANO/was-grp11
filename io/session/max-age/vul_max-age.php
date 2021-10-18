<?php
setcookie("persistent","cookie_value", time()+ 3600);
?>
<html>
<head>
<title>Vul : Session Max-Age</title>
</head>
<body>
<form method="get" action="/max-age/index.php">
    <button type="submit">Show index.php</button>
</form>
</body>
</html>
