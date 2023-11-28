<?php 
        
        

        session_start();
        if (isset($_SESSION['affichage']) && $_SESSION['affichage'] == false) {
                
                header("Location: index.php");
                
        } else if (empty($_SESSION['affichage'])) {
            header("Location: index.php");
        }
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJopLb8r/UAZBjNQJsnqz0y4O2F5K92K" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="w-screen h-full flex flex-col justify-center items-center gap-10">
    <div class="w-screen h-16 bg-white flex justify-between items-center px-7 fixed top-0">
        <img class="w-32 h-10 " src="IMAGE/avito-logo 1.png" alt="">
        <div class="w-fit h-fit  flex justify-center  gap-1">

            <?php 
            
            if (isset($_SESSION["role"])) {
            if ($_SESSION['role']=="vendeur") { ?>
            <a href="ADD_TACK.php"
                class="w-fit h-9 bg-blue-800 rounded-md p-1 text-sm font-bold text-white flex items-center">CREAT
                ANONNCE</a>
            <?php } }?>

            <a href="LOGOUT.php" class="text-base font-bold text-blue-800 flex items-center">LOG OUT</a>

        </div>
    </div>
    <div class="w-screen h-16"></div>

    <div class="w-screen h-fit grid grid-cols-3 place-content-center gap-5 px-5">

        <?php
            include_once'CONNECT_BASE.php'; 
            $select_data = "SELECT * FROM  TABLE_ANONNCE ";
            $query = mysqli_query($connect,$select_data);
            while ($row = mysqli_fetch_assoc($query)) {  ?>


            <div class="w-64 h-96 flex flex-col justify-center items-center rounded-xl border-solid border-x-2 border-y-2 border-gray-600 gap-3 p-2">      
                <h1 class="text-xl font-bold text-blue-500 "><?php echo $row['username'] ?></h1>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['IMAGE']); ?>" alt="" class="w-56 h-28 rounded-xl">
                
                <p class=" text-center"><?php echo $row['description'] ?></p>
                <h3 class="text-base font-bold text-gray-600 text-left">Prix: <?php echo $row['prix'] ?></h3>
                <div class="w-52 h-10 flex  items-center justify-evenly">
                    <?php

                            if (isset($_SESSION['role'])) { 
                                if ($_SESSION['role'] == "vendeur" ) { ?>
                            <a href="EDIT.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">EDITE</a>
                            <a href="DELET_WITH_ID.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">SUPPRIME</a>
                            <?php }}
                            ?>
                                
                                
                            <?php   
                            if (isset($_SESSION['role'])) { 
                            if ($_SESSION['role'] == "acheteur" ) {   ?>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
                            <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                                
                    <?php 
                }}
                ?>
                </div>    
            </div>
        <?php } ?>        
    </div>





</body>

</html>