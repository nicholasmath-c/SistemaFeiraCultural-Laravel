<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("assets/bootstrap/css/bootstrap.min.css")}}">
    <title>@yield('title') - Sistema Feira Cultural</title>
</head>
<body>
    <header class="text-danger">
        <h1>ETECFLIX</h1>
        <a href="{{url('/')}}"><button class="btn btn-danger">Voltar para a tela @yield('back-to')</button></a>
    </header>
    @yield('content')
</body>
</html>
