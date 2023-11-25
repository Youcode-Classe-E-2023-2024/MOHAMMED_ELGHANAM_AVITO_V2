<?php

include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    // header("Location: AFFICHAGE.php");

    $nameuser = $_POST['nameuser'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];
    echo $role;
    // $insert_data_signup = "INSERT INTO SIGNUP(nameuser,email ,password ) VALUES ('$nameuser','$email','$pwd')";
    // $query = mysqli_query($connect,$insert_data_signup);
    
    
}


?>