<?php
    include_once'CONNECT_BASE.php';
    if (isset($_POST['send'])) {
        header("Location: AFFICHAGE.php");
    $NEW_ID = $_POST['id'];
    $NEW_username = $_POST['nom'];
    $NEW_desc = $_POST['desc'];
    $NEW_prix = $_POST['prix'];
    $Edit_tasck = "UPDATE MED SET username='$NEW_username',description='$NEW_desc',prix='$NEW_prix' WHERE id='$NEW_ID'";
    $query = mysqli_query($connect,$Edit_tasck);
    }
?>