<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Etecflix</title>
    <link rel="stylesheet" href={{ url('resources/css/app.css') }}>
    <link rel="icon" type="{{ url('image/x-icon') }}" href="{{ url('images/favicon.png') }}">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src={{url("resources/js/jquery.mask.min.js")}}></script>
    <script src={{url("resources/js/script.js")}}></script>
    <script src={{url("resources/js/app.js")}}></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-black-netflix font-normal h-screen">
    <!-- Header -->
    <header class="bg-gradient-to-b from-black/50 to-black/10 flex justify-between items-center p-3">
        <img src={{url("./images/logo.png")}} class="w-24 md:w-32">
        <a href="{{url("/")}}" class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-lg text-center hover:bg-red-netflix/95">Voltar para a tela inicial</a>
    </header>
    @yield('content')
</body>

</html>
