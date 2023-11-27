<?php
include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    // header("Location: AFFICHAGE.php");

    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $prix = $_POST['prix'];
    $data_image = file_get_contents($_FILES['image']['tmp_name']);
    $insert_data = "INSERT INTO  TABLE_ANONNCE (username ,description ,prix ,IMAGE ) VALUES (?,?,?,?)";
    $prepar= mysqli_prepare($connect,$insert_data);
    mysqli_stmt_bind_param($prepar, "ssis", $nom, $desc, $prix, $data_image);
    $run = mysqli_stmt_execute($prepar);
    if ($run){
        echo"nadi";
    
        header("Location:AFFICHAGE.php");
    } else{
        echo mysqli_error($connect);
    }
    
    
}
    
?>