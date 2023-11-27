<?php
    session_start();
include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    header("Location: AFFICHAGE.php");

    $nameuser = $_POST['nameuser'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];
    $insert_data_signup = "INSERT INTO SIGNUP(nameuser,email ,password,role ) VALUES ('$nameuser','$email','$pwd','$role')";
    $query = mysqli_query($connect,$insert_data_signup);
    if ($query) {

    $_SESSION["nameuser"] = $nameuser;
    $_SESSION["email"] = $email;
    $_SESSION["pwd"] = $pwd;
    $_SESSION["role"] = $role;
    }
    
    
}


?>