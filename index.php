<?php
session_start();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                
                header("Location: admin.php");
                
        }

        if (isset($_SESSION['affichage']) && $_SESSION['affichage'] == true) {
                
            header("Location: AFFICHAGE.php");
            
    }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="w-screen h-screen flex flex-col justify-center items-center bg-slate-100 gap-6">
    <?php if (isset($_GET["incorrect"])) {?>

        <div class="w-[96%] h-16 bg-pink-100 rounded-xl flex justify-start items-center outline outline-1 outline-pink-400 gap-3 px-8">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
            <p class="text-2xl font-mono text-pink-600 ">This information is incorrect</p>
        </div>

    <?php }?>
    <div class="w-fit h-fit" id="login" style="display: block;">
        <h1 class="text-center text-5xl font-bold text-blue-700">LOG IN</h1>
        <form action="TRETEMMENT_LOGIN.php" method="post"
        class="w-fit h-fit flex justify-center items-center flex-col  rounded-2xl gap-4">
        

            <div class="f">
                <h3 class="font-bold text-slate-500">Email</h3>
                <input type="email" name="emails"
                    class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
            </div>

            <div class="f">
                <h3 class="font-bold text-slate-500">Password</h3>
                <input type="password" name="pwdd"
                    class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
                <p class="text-xs text-blue-700 underline decoration-1">Mot De Pass Oublié</p>
            </div>

            <input type="submit" value="LOG IN" name="send"
                class="w-64 h-10 rounded-xl bg-blue-500 font-bold text-slate-50 text-xl">
            
            <p class="w-64">Pas encore inscrit? <a onclick="register()"
                    class="text-blue-700 underline decoration-1 ">SIGN UP</a></p>



        </form>
    </div>




    <div class="w-fit h-fit" id="registr" style="display: none;">
        <h1 class="text-center text-5xl font-bold text-blue-700">REGISTR</h1>
        <form action="TRETEMMENT_SIGNUP.php" method="post"
            class="w-fit h-fit flex justify-center items-center flex-col  rounded-2xl gap-4">

            <div class="f">
                <h3 class="font-bold text-slate-500">USER NAME</h3>
                <input type="text" name="nameuser"
                    class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
            </div>


            <div class="f">
                <h3 class="font-bold text-slate-500">Email</h3>
                <input type="email" name="email"
                    class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
            </div>

            <div class="f">
                <h3 class="font-bold text-slate-500">Password</h3>
                <input type="password" name="pwd"
                    class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>

            </div>

           


            <div class="w-[100%] h-7 flex justify-center gap-8">
                <label for="vendeur">
                    <input type="radio" name="role" value="vendeur" id="vendeur"> VENDEUR
                </label>
                
                <label for="acheteur">
                    <input type="radio" name="role" value="acheteur" id="acheteur"> ACHETEUR
                </label>
                
            </div>


            <input type="submit" value="SIGN UP" name="send"
                class="w-64 h-10 rounded-xl bg-blue-500 font-bold text-slate-50 text-xl">
            <a onclick="login()"
                class="w-64 h-10 flex justify-center items-center rounded-xl bg-blue-500 font-bold text-slate-50 text-xl">BACK
                LOG IN</a>



        </form>
    </div>

    <script>
        const LOGIIN = document.getElementById('login');
        const REGISTERS = document.getElementById('registr');
        function login() {
            console.log("satttt");
            LOGIIN.style.display = 'block';
            REGISTERS.style.display = 'none';
        }

        function register() {
            console.log("satttt");
            LOGIIN.style.display = 'none';
            REGISTERS.style.display = 'block';
        }

    </script>
</body>

</html>