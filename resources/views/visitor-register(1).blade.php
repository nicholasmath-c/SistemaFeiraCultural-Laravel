<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - EtecFlix</title>
    <link rel="stylesheet" href="./input.css">
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <script src="./js/script.js"></script>

</head>

<body class="bg-black-netflix font-netflix-regular h-screen">
    
    <!-- Header -->
    <header class="bg-gradient-to-b from-black/50 to-black/10 flex justify-between items-center p-3">

        <img src="./images/logo.png" class="w-24 md:w-32">

        <a href="/src/index.html" class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-lg text-center hover:bg-red-netflix/95">Voltar para a tela inicial</a>

    </header>

    <!-- Container -->
    <section class="h-4/5 flex flex-col justify-around">

        <form method="post" action="" class="bg-black/80 w-4/5 lg:w-3/6 mx-auto p-3 md:p-5 rounded-md">

            <fieldset class="flex flex-col space-y-3">

                <legend class="text-white text-xl md:text-3xl">Cadastro</legend>

                <input type="text" placeholder="Nome" required class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none">

                <input type="email" placeholder="Email" required class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none">

                <input type="text" placeholder="RG ou CPF" required id="documento" class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none">

                <input type="tel" placeholder="Celular" required maxlength="11" id="cel" class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none">

                <div class="flex flex-col justify-center items-left space-y-1">

                    <h2 class="text-white text-lg md:text-2xl">Você veio com?</h2>

                    <select class="bg-input-netflix input-check ring-1 ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none">
                        <option value="none">Ninguém</option>

                        <option value="amigo">Amigo</option>

                        <option value="familiar">Familiar</option>
                    </select>
                </div>

                <input type="submit" value="Cadastrar" class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-lg text-center hover:bg-red-netflix/95 hover:cursor-pointer">

            </fieldset>

        </form>

    </section>

</body>

</html>