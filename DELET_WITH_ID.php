<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="w-screen h-screen flex justify-center items-center bg-blue-200">
    <form action="DELET.php" method="post" class="w-96 h-60 flex flex-col justify-center items-center gap-2 bg-blue-500 rounded-3xl p-3">
        
        <h3 class="text-white font-bold text_lg ">ADD ID</h3>
        <input type="text" name="new_id" class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600">
        <input type="submit" value="SUPPRIMER" name="send" class="w-64 h-10 bg-blue-600 pos rounded-lg text-white font-bold">
        <a href="AFFICHAGE.php" class="w-64 h-10 flex justify-center items-center rounded-xl bg-blue-600 font-bold text-slate-50 text-xm" >BACK</a>

                                                           
    </form>
</body>
</html>