@extends('layouts.app')

@section('content')
    <div>
    @foreach ($usuarios as $usuario)
    <div class="containerMaior">
        
        <div class="card bg-white text-success mt-2 col-md-12">
            <div class="card-header">{{ __('') }}</div>

            <div class="card-body col-md-12">
                <div class="card-content" id="card-content">
                    <div class="col-md-6">
                        <h1>{{$usuario->name}}</h1>
                        <h3>{{$usuario->email}}</h3>
                        <div class="col-md-4 w-50 p-3">
                            <img src="/images/{{$usuario->image_path}}" alt="foto de perfil"> 
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection