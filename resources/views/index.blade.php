<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfis - Etecflix</title>
    <link rel="stylesheet" href="./input.css">
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

</head>

<body class="bg-black-netflix font-netflix-regular h-screen">
    
    <!-- Header -->
    <header class="bg-gradient-to-b from-black/50 to-black/10 flex justify-center items-center p-3">

        <img src="./images/logo.png" class="w-24 md:w-32">

    </header>

    <!-- Container -->
    <section class="flex flex-col justify-center items-center space-y-5 md:space-y-7 h-4/5">

        <h1 class="text-white text-xl md:text-3xl">Quem está acessando?</h1>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="./cadastro.html" class="flex flex-col justify-center items-center space-y-2">

                <img src="./images/aluno.png" class="w-24 h-24 md:w-32 md:h-32 rounded-md hover:animate-pulse">

                <h2 class="text-white text-xs md:text-lg font-netflix-light">Visitante</h2>

            </a>

            <a href="./login-professor.html" class="flex flex-col justify-center items-center space-y-2">

                <img src="./images/professor.png" class="w-24 h-24 md:w-32 md:h-32 rounded-md hover:animate-pulse">

                <h2 class="text-white text-xs md:text-lg font-netflix-light">Professor</h2>

            </a>

            <a href="#" class="flex flex-col justify-center items-center space-y-2">

                <span class="iconify bg-input-netflix rounded-md w-24 h-24 md:w-32 md:h-32 hover:animate-pulse" data-icon="carbon:add" style="color:#8c8c8c"></span>

                <h2 class="text-white text-xs md:text-lg font-netflix-light">Adicionar Perfil</h2>

            </a>

        </div>


    </section>


</body>

</html>