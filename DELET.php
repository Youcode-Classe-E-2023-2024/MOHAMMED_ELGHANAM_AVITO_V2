<?php
    include_once'CONNECT_BASE.php';
    
    if (isset($_POST['send'])) {
        header("Location: AFFICHAGE.php");
    $delet_tasck = $_POST['new_id'];
    $suppres_data = "DELETE FROM MED WHERE id = $delet_tasck ";
    $query = mysqli_query($connect,$suppres_data);
    
    }
    
?>