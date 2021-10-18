<?php 

if(isset($_GET["nom"])){
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "was";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfull <br>";
    
    $nom = $_GET["nom"];
    $sql = "SELECT * FROM etudiants where nom='".$nom."'";
    $result = mysqli_query($conn, $sql);
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
?>

