<?php 
        
        

        session_start();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == false) {
                
                header("Location: index.php");
                
        } else if (empty($_SESSION['admin'])) {
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

<body class="w-screen h-full flex flex-col justify-center items-center gap-2 overflow-x-hidden p-2">

    <div class="w-screen h-16 bg-white flex justify-between items-center px-7 fixed top-0 shadow-lg shadow-blue-200">
        <img class="w-32 h-10 " src="IMAGE/avito-logo 1.png" alt="">
        
        <a href="LOGOUT.php" class="text-base font-bold text-blue-800 flex items-center">LOG OUT</a>
    </div>
    <div class="w-screen h-16 "></div>
    <div class="w-screen h-screen   flex gap-3 fixed top-16 p-3">
        <!-- fixed top-16 -->
        <div class="w-[30%] h-screen  rounded-lg flex flex-col justify-start gap-2 shadow-lg shadow-blue-200 p-3">


            <div class="w-80 h-14 bg-cyan-50 rounded-lg flex justify-start items-center px-3 gap-2">
                <img src="IMAGE/DSC_2315 copy.jpg" alt="" class="w-12 h-11 rounded-full ">
                <div class="w-fit h-fit flex flex-col">
                    <h2 class="text-gray-600 font-bold">Mohammed Elghanm</h2>
                    <p class="text-gray-500">MohammedElghanam@gmail.com</p>
                </div>
            </div>

            <a onclick="anonnce()"
                class="w-80 h-10 bg-cyan-50 rounded-lg flex justify-start items-center px-3 gap-2 active:bg-blue-700 text-base font-bold text-gray-800 active:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <path
                        d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
                Les Anonnce
            </a>

            <a onclick="users()"
                class="w-80 h-10 bg-cyan-50 rounded-lg flex justify-start items-center px-3 gap-2 active:bg-blue-700 text-base font-bold text-gray-800 active:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                User
            </a>


        </div>
        <!-- ------------------USERS--------------------- -->

        
            




                <div style="display: block;" class="w-[70%] h-screen px-[0.3%]  py-[0.3%] flex flex-col gap-5 overflow-auto "
                    id="users">
                    <?php
                    include_once'CONNECT_BASE.php'; 
                    $select_data = "SELECT * FROM  signup ";
                    $query = mysqli_query($connect,$select_data);
            




                    while ($row = mysqli_fetch_assoc($query)) { ?>

                    <div class="w-[100%] h-20  rounded-md  flex justify-between items-center px-3 outline outline-offset-2 outline-1 shadow-lg shadow-blue-200 ">

                        <div class="w-80 h-14   flex justify-start items-center px-3 gap-5 border-r-2 border-gray-500 ">
                        <img src="IMAGE/DSC_2315 copy.jpg" alt="" class="w-12 h-12 rounded-full ">
                        <div class="w-fit h-fit flex flex-col">
                                <h2 class="text-gray-600 font-bold"> <?php echo $row['nameuser']; ?> </h2>
                                <p class="text-gray-500"> <?php echo $row['role']; ?> </p>
                        </div>
                        </div>



                        <div class="w-52 h-10 flex  items-center justify-evenly ">
                            <a href="ADMIN.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">EDITE</a>
                            <a href="ADMIN.php" class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">SUPPRIME</a>
                        </div>

                    </div>

                  <?php  }  ?>



                </div>

        

        <!-- ----------------------ANONNCE----------------------------------- -->

        
    


            <div style="display: none;" class="w-[70%] h-screen px-[0.3%]  py-[0.3%] flex flex-col gap-3 overflow-auto "
                id="anonnce">

                <?php
                    include_once'CONNECT_BASE.php'; 
                    $select_data = "SELECT * FROM  TABLE_ANONNCE ";
                    $query = mysqli_query($connect,$select_data);

                while ($row = mysqli_fetch_assoc($query)) { ?>
                        <div
                            class="w-[100%] h-40  rounded-md  flex justify-between items-center px-3 outline outline-offset-2 outline-1 shadow-lg shadow-blue-200 ">
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['IMAGE']); ?>" alt="" class="w-56 h-28 rounded-xl">
                
                            <hr class="w-20 h-[1.5%] rotate-90 bg-gray-600">
                            <div class="w-fit h-fit flex flex-col">
                            <h2 class="text-blue-600 text-xl font-bold">  <?php echo $row['username']?> </h2>
                            <p class="text-gray-500 font-bold"> <?php echo $row['prix']?> MAD</p>
                            </div>
                            <hr class="w-20 h-[1.5%] rotate-90 bg-gray-600">

                                <div class="w-fit h-fit flex flex-col items-center justify-evenly gap-2">

                                <a href="add_anonnce_admin.php" class="w-fit h-9 bg-blue-600 rounded-md p-1 text-sm font-bold text-white flex items-center">CREAT ANONNCE</a>

                                    <a href="MODIFIER.php"
                                    class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">EDITE</a>
                                    <a href="DELET.php?id=<?= $row['id'] ?>"
                                    class=" w-20 h-8 flex justify-center items-center rounded-xl bg-blue-600 text-white font-bold text-xs">SUPPRIME</a>

                                </div>

                            </div>
               <?php } ?>

            </div>
        
    </div>
    <script src="script.js"></script>
</body>

</html>