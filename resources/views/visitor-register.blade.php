@extends('templates.template-header-w-btn')

@section('title')
    Cadastro de Visitante
@endsection

@section('content')
    <!-- Container -->
    <section class="h-4/5 flex flex-col justify-around">

        @if (Session::has('message'))
            <section class="popup">
                <div class="popup-inner">
                    <div class="popup-content">
                        <div class="content text-center">
                            <h6 class=" text-emerald-500 font-bold">{{ Session::get('message') }}</h6>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if (isset($errors) && count($errors) > 0)
            <div class="content text-center">
                @foreach ($errors->all() as $error)
                    <h6 class="text-red-netflix font-bold">{{$error}}<br></h6>
                @endforeach
            </div>
        @endif

        <form name="frmCad" id="frmCad" method="post" action="{{ url('admin/visitors') }}"
            class="bg-black/80 w-4/5 lg:w-3/6 mx-auto p-3 md:p-5 rounded-md">
            @csrf

            <fieldset class="flex flex-col space-y-3">

                <legend class="text-white text-xl md:text-3xl">Cadastro</legend>

                <input type="text" name="name" id="name" placeholder="Nome" required
                    class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none p-2">

                <input type="email" name="email" id="email" placeholder="Email" required
                    class=" bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white pla                  ceholder:text-gray-netflix text-md md:text-xl border-none p-2">

                <input type="tel" name="cellphone" id="cellphone" placeholder="Celular" required maxlength="11"
                    class="bg-input-netflix input-check focus:ring-1 focus:invalid:ring-red-netflix focus:valid:ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none p-2">

                <div class="flex flex-col justify-center items-left space-y-1 p-2">

                    <h2 class="text-white text-lg md:text-2xl">Você veio com?</h2>

                    <select name="friend_family" id="friend_family"
                        class="bg-input-netflix input-check ring-1 ring-green-600 rounded-md text-white placeholder:text-gray-netflix text-md md:text-xl border-none p-2"">
                        <option value="amigo">Amigo</option>

                        <option value="familiar">Familiar</option>
                    </select>
                </div>

                <input type="submit" value="Cadastrar"
                    class="block bg-red-netflix px-3 py-2 rounded-md text-white text-xs md:text-lg text-center hover:bg-red-netflix/95 hover:cursor-pointer p-2"">

            </fieldset>

        </form>

    </section>
@endsection
