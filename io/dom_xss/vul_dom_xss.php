<html>
<head>
	<title>Atk : DOM XSS Rule 1</title>
</head>
<body>
<h1>Your custom button</h1>
<div>Modify parameter <strong>button</strong> in URL with the text of the custom button.<br>
<i>Example : ?button=My%20custom%20button</i> <br>
<script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const text = urlParams.get('button')
let button =  "<button>"+ text +"</button>";
console.log(button);
document.write(button);
</script>
</body>
</html>	
