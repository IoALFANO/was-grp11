<html lang="en">
<head>
    <title>List of users</title>
</head>
<body>
    <h1>List of users:</h1>
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Website</th>
        </tr>
        <?php 
            $conn = mysqli_connect("localhost", "admin", "admin", "was");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["prenom"] ?></td>
                    <td><?php echo $row["nom"] ?></td>
                    <td><a href="<?php echo str_replace("javascript:","",$row["website"]) ?>">website</a></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>
