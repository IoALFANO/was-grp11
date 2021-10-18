<!doctype html>
<html lang="en">
  <head>
    <title>Règle 2</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <div class ="shadowbox <?php 
    if (isset($_GET["name"])){
          echo (htmlentities(($_GET["name"])));
        }?>">
  </div>
</html>
