@extends('layouts.app')

@section('content')
<style>
    #intro {
        background-image: url('/img/image5.jpg');
        background-size: cover;
    }
    #message {
        width:fit-content;
        padding: 0.5em;
        text-align: center;
        border-radius: 6%;
    }

</style>
<div class="row col-md-12 align-content-center justify-content-center">
    <div class="container col-md-4 ">
        <div id="container" class="row col-md-12 justify-content-center align-content-center text-align-center">
            <div class="row col-md-12">
                <div class= "col-md-12 mt-3 card bg-success text-white text-align-center">
                    <div class="card-header">Perfil - {{ auth()->user()->tipoUsuario }}</div>
                    
                    <div class="card-body">
                        <img src="/profile_pictures/{{auth()->user()->profile_picture}}" alt="foto de perfil" width="30%">
                        <h4 class="mt-3">Nome: </h4>
                        {{ auth()->user()->name }}
                        <h4 class="mt-3">Email: </h4> 
                        {{ auth()->user()->email }}
                        <h4 class="mt-3">Telefone: </h4> 
                        {{ auth()->user()->phone }}
                        <h4 class="mt-3">Localidade: </h4> 
                        {{ auth()->user()->place }}
                        <h4 class="mt-3">Produtos: </h4> 
                        {{ auth()->user()->products }}
                    </div>
                    <div>
                        <a href="/profile/updateUserProfile/{{ auth()->user()->id }}" type="submit" class="btn btn-warning m-3">
                            {{ __('Editar/adicionar informações ao perfil') }}
                        </a>
                    </div>
                    @if (session()->has('message'))
                        <div class="m-1">
                            <p id="message" class="m-2 bg-white text-success">
                                {{ session ()->get('message')}}
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container col-md-8">
        <div id="container" class="row col-md-12 justify-content-center align-content-center text-align-center">
            <div class="row col-md-12">
                <div class= "col-md-12 mt-3 card bg-success text-white">
                    <div class="card-header">Página Inicial</div>
    
                    <div class="card-body">
                    Bem vindo à sua conta, {{ auth()->user()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
