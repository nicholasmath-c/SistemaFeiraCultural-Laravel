<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Etecflix</title>
    <link rel="icon" type="{{ url('image/x-icon') }}" href="{{ url('images/favicon.png') }}">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-black-netflix font-normal h-screen">
    <!-- Header -->
    <header class="bg-gradient-to-b from-black/50 to-black/10 flex justify-center items-center p-3">
        <img src="{{ url('images/logo.png') }}" class="w-24 md:w-32">
    </header>
    @yield('content')
</body>

</html>
