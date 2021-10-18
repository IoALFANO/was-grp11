<?php 
if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["website"])){
    $conn = mysqli_connect("localhost", "admin", "admin", "was");
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $website = $_POST["website"];
    $sql = "INSERT INTO user(nom,prenom,website) values('$nom','$prenom','$website')";
    if(mysqli_query($conn, $sql)){
        echo "User added successfully";
    }
    else{
        echo "Error adding user: " . mysqli_error($conn);
    }
}
?>
