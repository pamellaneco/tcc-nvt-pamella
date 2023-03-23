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
                    <h1>Consumidor</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
