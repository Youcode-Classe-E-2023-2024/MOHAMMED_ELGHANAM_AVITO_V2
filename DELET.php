<?php
    include_once'CONNECT_BASE.php';
    
        
        
    
   
    header("Location: AFFICHAGE.php");
    $delet_tasck = $_GET['id'];
    $suppres_data = "DELETE FROM table_anonnce WHERE id = $delet_tasck ";
    $query = mysqli_query($connect,$suppres_data);
    
    
    
?>