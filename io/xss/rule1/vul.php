<!doctype html>
<html lang="en">
  <head>
    <title>Règle 1</title>
  </head>
  
  <div>
    Bonjour
    <h4>
      <?php 
        if (isset($_GET["name"])){
    echo $_GET["name"];
        }
      ?>
    </h4>
  </div>
</html>
