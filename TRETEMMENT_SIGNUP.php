<?php
    session_start();
include_once'CONNECT_BASE.php';
if (isset($_POST['send'])) {
    $nameuser = $_POST['nameuser'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];

    // Hash the password before storing it
    $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

    $insert_data_signup = "INSERT INTO SIGNUP (nameuser, email, password, role) VALUES ('$nameuser', '$email', '$hashed_password', '$role')";
    $query = mysqli_query($connect, $insert_data_signup);

    if ($query) {
        // Do not store the hashed password in the session
        $_SESSION["nameuser"] = $nameuser;
        $_SESSION["email"] = $email;
        $_SESSION["role"] = $role;
        $_SESSION['affichage'] = true;
        header("Location: AFFICHAGE.php");
    } else {
        // Query failed, display the error
        echo "Error: " . mysqli_error($connect);
    }
}



?>