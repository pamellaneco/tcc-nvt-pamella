@extends('layouts.app')

@section('content')
<div>
    <style>
        .listProducersProfiles {
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            flex-direction: column;
            flex-wrap: nowrap;
        }
    </style>
    <div class="listProducersProfiles col-md-12">
    @foreach ($usuarios as $usuario)
    <div class="listProducersProfiles col-md-8">
        <div class="card d-flex justify-content-center text-align-center align-items-center bg-white text-success mt-2 col-md-12">
            <div class="card-body col-md-12">
                <div class="card-content" id="card-content">
                    <div class="col-md-12 d-flex flex-direction-row">
                        <div class="col-md-8">
                            <h1>{{$usuario->name}}</h1>
                            <h3>{{$usuario->email}}</h3>
                            <h3 class="mt-3">Produtos principais: {{ auth()->user()->products }}</h4>
                        </div>
                        <div class="col-md-4 w-100 p-3">
                            <img src="/profile_pictures/{{auth()->user()->profile_picture}}" alt="foto de perfil" width="30%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection