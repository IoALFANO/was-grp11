<!doctype html>
<html lang="en">
  <head>
    <title>Def : XSS Regle 0</title>
  </head>
   <h1>Print your name</h1>
<div>Modify parameter <strong>name</strong> in URL with your name.<br>
<i>Example : ?name=John</i> <br>
<?php
          echo ($_GET["name"])
      ?>
 <script>"...NEVER PUT UNTRUSTED DATA HERE…"</script>
</html>
