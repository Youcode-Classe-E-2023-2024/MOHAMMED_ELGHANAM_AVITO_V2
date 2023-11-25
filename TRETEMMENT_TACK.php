<?php
include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    header("Location: AFFICHAGE.php");

    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $prix = $_POST['prix'];
    $insert_data = "INSERT INTO MED(username ,description ,prix ) VALUES ('$nom','$desc','$prix')";
    $query = mysqli_query($connect,$insert_data);
    
    
}
    
?>