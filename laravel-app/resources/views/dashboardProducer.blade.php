@extends('layouts.app')

@section('content')
<style>
    #intro {
        background-image: url('/img/image5.jpg');
        background-size: cover;
    }
</style>
<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 bg-success text-white">
                <div class="card-header">Bem vindo à sua conta, {{ auth()->user()->name }}</div>

                <div class="card-body">
                    <h1>Agricultor</h1>
                    <p>clicar na aba de perfil e ver seu perfil com suas informações inseridas durante o cadastro</p>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
