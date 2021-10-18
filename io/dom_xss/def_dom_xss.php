<html>
<head>
	<title>Vul : DOM XSS Rule 1</title>
</head>
<body>
<h1>Your custom button</h1>
<div>Modify parameter <strong>button</strong> in URL with the text of the custom button.<br>
<i>Example : ?button=My%20custom%20button</i> <br>

<script type="text/javascript" src="../DOMPurify/dist/purify.min.js"></script>

<script type="text/javascript" language="JavaScript">
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const text = urlParams.get('button')
let button_clean = DOMPurify.sanitize( "<button>"+ text +"</button>", {USE_PROFILES: {html: true}} );
document.write(button_clean);
</script>
</body>
</html>	
