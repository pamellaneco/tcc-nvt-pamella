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
    @foreach ($users as $user)
    <div class="listProducersProfiles col-md-8">
        <div class="card d-flex justify-content-center text-align-center align-items-center bg-white text-success mt-2 col-md-12">
            <div class="card-body col-md-12">
                <div class="card-content" id="card-content">
                    <div class="col-md-12">
                        <h1>{{$user->name}}</h1>
                        <h3>{{$user->email}}</h3>
                        <div class="col-md-4 w-50 p-3">
                            <img src="/images/{{$user->image_path}}" alt="foto de perfil"> 
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