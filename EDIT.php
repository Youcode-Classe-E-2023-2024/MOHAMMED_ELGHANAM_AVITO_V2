<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="w-screen h-screen flex flex-col justify-center items-center bg-slate-100 gap-6">
    <h1 class="text-center text-5xl font-bold text-blue-700">Edite Annonce</h1>
    <form action="EDIT_TRETMENT.php" method="post" class="w-96 h-3/4 flex justify-start items-center flex-col  rounded-2xl gap-2">

        <div class="f">
            <h3 class="font-bold text-slate-500">ID</h3>
            <input type="text" name="id" class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
        </div>
        
        <div class="f">
            <h3 class="font-bold text-slate-500">Username</h3>
            <input type="text" name="nom" class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
        </div>
        <!-- <div class="f">
            <h3 class="font-bold text-slate-500">Image</h3>
            <input type="file" name="image" class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
        </div> -->
        <div class="f">
            <h3 class="font-bold text-slate-500">Prix</h3>
            <input type="text" name="prix" class="w-64 h-10 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
        </div>
        <div class="f">
            <h3 class="font-bold text-slate-500">Description</h3>
            <input type="text" name="desc" class="w-64 h-16 rounded-xl border-solid border-x-2 border-y-2 border-gray-600" required>
        </div>
        <input type="submit" value="Edite" name="send" class="w-64 h-10 rounded-xl bg-blue-500 font-bold text-slate-50 text-xl">
        <a href="AFFICHAGE.php" class="w-64 h-10 flex justify-center items-center rounded-xl bg-blue-500 font-bold text-slate-50 text-xl" >BACK</a>

    </form>
    

</html>