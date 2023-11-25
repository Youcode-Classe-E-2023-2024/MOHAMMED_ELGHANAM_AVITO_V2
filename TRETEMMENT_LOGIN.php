<?php

include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    
    
    $email = $_POST['emails'];
    $pwd = $_POST['pwdd'];
    $SELECT_data_signup = "SELECT * FROM SIGNUP WHERE email='$email' AND password = '$pwd'";
    $query = mysqli_query($connect,$SELECT_data_signup);
    
    
    if ($query) {
        $row = mysqli_fetch_assoc($query);
        echo $row["password"];
        
    }else {
        echo"erreur";
    }
    
    
    
}


?>