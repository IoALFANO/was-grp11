<head>
    <title>List of users</title>
</head>
<body>
    <h1>List of users:</h1>
    <table border="1px">
        <tr>
            <th>Id</th> <th>Nom</th> <th>Prenom</th> <th>Website</th>
        </tr>
        <?php 
            $conn = mysqli_connect("localhost", "admin", "admin", "was");
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td> <td><?php echo $row["prenom"] ?></td>
                    <td><?php echo $row["nom"] ?></td> <td><a href="<?php echo $row["website"] ?>">website</a></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>
