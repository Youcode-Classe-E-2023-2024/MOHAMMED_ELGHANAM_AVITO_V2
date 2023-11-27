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
    
    
    
    $SELECT_data_signup = "SELECT * FROM SIGNUP WHERE email='$emails' AND password='$pwdd'";
    $query = mysqli_query($connect,$SELECT_data_signup);
    $row = mysqli_fetch_assoc($query);


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


    if (isset($row)) {
        if ($emails === $row['email'] && $pwdd === $row["password"]) {
                 header("Location:AFFICHAGE.php");
                 exit;
              
            }else {
                header("Location:index.php?incorrect=true");
                exit;
            }
        
    }else {
        header("Location:index.php?incorrect=true");
    }



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