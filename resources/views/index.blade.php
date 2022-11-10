@extends('templates.template-header')

@section('title')
   Início 
@endsection

@section('content')
    <!-- Container -->
    <section class="flex flex-col justify-center items-center space-y-5 md:space-y-7 h-4/5">

        <h1 class="text-white text-xl md:text-3xl">Quem está acessando?</h1>

        <div class="grid grid-cols-2 gap-6">

            <a href="./cadastro.html" class="flex flex-col justify-center items-center space-y-2">

                <img src="{{url("images/aluno.png")}}" class="w-24 h-24 md:w-32 md:h-32 rounded-md hover:animate-pulse">

                <h2 class="text-white text-xs md:text-lg font-light">Visitante</h2>

            </a>

            <a href="./login-professor.html" class="flex flex-col justify-center items-center space-y-2">

                <img src="{{url("images/professor.png")}}" class="w-24 h-24 md:w-32 md:h-32 rounded-md hover:animate-pulse">

                <h2 class="text-white text-xs md:text-lg font-light">Professor</h2>

            </a>

            <!--<a href="#" class="flex flex-col justify-center items-center space-y-2">

                <span class="iconify bg-input-netflix rounded-md w-24 h-24 md:w-32 md:h-32 hover:animate-pulse" data-icon="carbon:add" style="color:#8c8c8c"></span>

                <h2 class="text-white text-xs md:text-lg font-netflix-light">Adicionar Perfil</h2>

            </a>-->

        </div>


    </section>
@endsection

