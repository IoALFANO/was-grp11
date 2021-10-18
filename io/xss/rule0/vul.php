<!doctype html>
<html lang="en">
  <head>
    <title>Atk : XSS Regle 0</title>
  </head>
  <h1>Print your name</h1>
  <div>Modify parameter <strong>name</strong> in URL with your name.<br><i>Example : ?name=John</i><br>
  <p id="name"></p>
    <script>
    <?php echo $_GET['name']; ?>;
    </script>
</html>
