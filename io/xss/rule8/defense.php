<html>
<head>
<title>Custom Dashboard </title>
</head>
<body>
    Hello to the XSS
</body>
<script>
	var pos=document.URL.indexOf("user=")+5;
	document.write(escape(document.URL.substring(pos,document.URL.length)));
</script>
</html>
