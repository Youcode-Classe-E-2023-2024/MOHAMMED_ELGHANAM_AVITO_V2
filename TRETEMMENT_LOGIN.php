<?php
    session_start();
    include_once('CONNECT_BASE.php');
    if (isset($_POST['send'])) {
        $emails = $_POST['emails'];
        $pwdd = $_POST['pwdd'];

    if ( $emails == "admin@admin" && $pwdd == "admin" ) {
        $_SESSION['admin'] = true;
        header("Location: ADMIN.php");
        exit;
    }
    
    
    
    $SELECT_data_signup = "SELECT * FROM SIGNUP WHERE email='$emails'";
    $query = mysqli_query($connect,$SELECT_data_signup);
    $row = mysqli_fetch_assoc($query);
    $role = $row["role"];
    

    if (isset($row)) {
        if ($emails === $row['email'] && password_verify($pwdd, $row["password"])) {
            $_SESSION["nameuser"] = $nameuser;
            $_SESSION["email"] = $email;
            $_SESSION["role"] = $role;
            $_SESSION['affichage'] = true;
                 header("Location:AFFICHAGE.php");
                 exit;
              
            }else {
                header("Location:index.php?incorrect=true");
                exit;
            }
        
    }else {
        header("Location:index.php?incorrect=true");
    }



    //    if (empty($row)) {
    //      header("Location:index.php?incorrect=true");
    //      exit;
    //  } else if ($emails === $row['email'] && $pwdd === $row["password"]) {
    //      header("Location:AFFICHAGE.php");
    //      exit;
      
    //  }else {
    //      header("Location:index.php?incorrect=true");
    //      exit;
    //  }




    // $query = $connect->query($SELECT_data_signup);
    // $row = mysqli_fetch_assoc($query);

    // if (!$row) {
    //     header("Location:index.php?incorrect=true");
    //     exit;
    // } else if ($emails === $row['email'] && $pwdd === $row["password"]) {
    //     header("Location:AFFICHAGE.php");
    //     exit;
        
    // }else {
    //     header("Location:index.php?incorrect=true");
    //     exit;
    // }
    
    
    
}


?>