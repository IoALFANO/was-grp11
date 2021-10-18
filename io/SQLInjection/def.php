<?php 
if(isset($_GET["nom"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sql_test_injection";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfull <br>";
    
    $nom = $_GET["nom"];
    $sql = "SELECT * FROM etudiants where nom=?";
    $statement = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($statement, 's',$nom);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "<h2>Student number: " . $row["id"]. " - Firstname: " . $row["prenom"]. " Lastname:" . $row["nom"]. "<br></h2>";
        }
    } 
    else {
        echo "Student not found";
    }
    mysqli_close($conn);

}
else{
    echo "<h1>Access not allowed</h1>";
}
}
?>
