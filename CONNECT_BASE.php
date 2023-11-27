<?php
    $connect = mysqli_connect('localhost','root','');
    $CREATE_DB = "CREATE DATABASE IF NOT EXISTS AVITO";
    $query = mysqli_query($connect,$CREATE_DB);
    mysqli_select_db($connect, 'AVITO');
    $seq = "CREATE TABLE IF NOT EXISTS TABLE_ANONNCE (id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(255) NOT NULL,description VARCHAR(255) NOT NULL,prix INT NOT NULL,IMAGE LONGBLOB)";
    $signup = "CREATE TABLE IF NOT EXISTS SIGNUP (id INT AUTO_INCREMENT PRIMARY KEY,nameuser VARCHAR(255) NOT NULL,email VARCHAR(255) NOT NULL,password INT NOT NULL,role VARCHAR(255) NOT NULL)";
    $query1 = mysqli_query($connect,$seq);
    $query2 = mysqli_query($connect,$signup);
    // if ($query2) {
    //     echo "create";
    // }else {
    //     echo "error";
    // }
    
?>