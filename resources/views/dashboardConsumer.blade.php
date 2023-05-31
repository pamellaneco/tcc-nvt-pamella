@extends('layouts.app')

@section('content')
<style>
    #intro {
        background-image: url('/img/image5.jpg');
        background-size: cover;
    }
</style>
<div class="row col-md-12 align-content-center justify-content-center">
    <div class="container col-md-4 ">
        <div id="container" class="row col-md-12 justify-content-center align-content-center text-align-center">
            <div class="row col-md-12">
                <div class= "col-md-12 mt-3 card bg-success text-white text-align-center">
                    <div class="card-header">Perfil - {{ auth()->user()->role }}</div>
    
                    <div class="card-body">
                        <img src="/img/user.png" alt="foto de perfil" width="30%">
                        <h4 class="mt-3">Nome: </h4>
                        {{ auth()->user()->name }}
                        <h4 class="mt-3">Email: </h4> 
                        {{ auth()->user()->email }}
                    </div>
                    <div>
                        <a href="/profile/update/{{ auth()->user()->id }}" type="submit" class="btn btn-warning m-3">
                            {{ __('Editar/adicionar informações ao perfil') }}
                        </a>
                    </div>
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
