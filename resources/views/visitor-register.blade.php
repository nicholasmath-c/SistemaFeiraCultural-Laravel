@extends('templates.template-header')

@section('title')
    Cadastro
@endsection


@section('content')
    <h1 class="text-center">Cadastro</h1>
    <hr>
    @if (Session::has('message'))
    <section class="popup">
        <div class="popup-inner">
            <div class="popup-content">
                <div class="content text-center">
                    <h6 class="text-success">{{ Session::get('message') }}</h6>
                </div>
            </div>
        </div>
    </section>
    @endif
    <div class="col-8 m-auto">
        <form name="frmCad" id="frmCad" method="POST" action="{{url('visitors')}}">
            @csrf
            <input class="form-control mb-3" name="name" id="name" type="text" placeholder="Nome" required>
            <input class="form-control mb-3" name="email" id="email" type="text" placeholder="E-mail" required>
            <input class="form-control mb-3" name="cellphone" id="cellphone" type="text" placeholder="Celular" required>
            Você é?
            <input type="radio" name="friend_family"  id="friend_family" value="amigo" required> Amigo
            <input type="radio" name="friend_family"  id="friend_family" value="familiar" required> Familiar <br>
            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
