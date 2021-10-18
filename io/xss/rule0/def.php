<!doctype html>
<html lang="en">
  <head>
    <title>Def : XSS Regle 0</title>
  </head>
  <h1>Print your name</h1>
  <div>Modify parameter <strong>name</strong> in URL with your name.<br><i>Example : ?name=John</i><br> 
<script>
        <?php echo (substr(preg_replace("/[^a-zA-Z0-9]+/", "",$_GET['name']),0,20)); ?>
        // echo htmlentities($_GET['name']); ?>
      </script>
</html>
