  <!doctype html>
<html lang="en">
  <head>
    <title>Regle 6</title>
  </head>  
    <body>
    <script src="https://cdn.jsdelivr.net/gh/jitbit/HtmlSanitizer@master/HtmlSanitizer.js"></script>
     Bonjour<p id="name"></p>
     <script>
      document.write(HtmlSanitizer.SanitizeHtml("<?php echo ($_GET["name"])?>"));
    </script>
    </body>
  </div>
</html>
