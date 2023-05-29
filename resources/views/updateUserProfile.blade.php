@extends('layouts.app')

@section('content')

<div class="container align-content-center justify-content-center">
    <div id="container1" class="align-content-center justify-content-center">
        <div class="col-md-12">
            <div id="banner" class="text-center p-3 w-20 text-white text-bold">
                <h1>Editar perfil</h1>
                <h2>Insira aqui as informações para editar seu perfil:</h2>
            <style>
                #banner {
                    background-image: url('/img/image4.jpg');
                    background-size:cover ;
                }
                #form-card {
                    background-image: url('/img/image4.jpg');
                    background-size:cover ;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                #form-posts {
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    flex-wrap: wrap;
                }
            </style>
            </div>
                <div class="container mt-5">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-md-6">
                            <div id="form-card" class="card mt-5 bg-success text-white">
                                <div class="card-header">{{ __('Edite suas informações pessoais:') }}</div>

                                <div class="card-body">
                                    <form class="col-md-12" id="form-posts" action="/profile/update/{{$perfil['id']}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="name">{{ __('Nome:') }}</label>
                                            <input class="mt-2 form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$perfil['name']}}" placeholder="Seu nome...">
                                        </div>
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="email">{{ __('Email:') }}</label>
                                            <input class="mt-2 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$perfil['email']}}" placeholder="Seu Email...">
                                        </div>
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="phone">{{ __('Telefone:') }}</label>
                                            <input class="mt-2 form-control @error('phone') is-invalid @enderror" type="number" name="phone" value="{{$perfil['phone']}}" placeholder="Seu telefone...">
                                        </div>
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="place">{{ __('Localidade:') }}</label>
                                            <input class="mt-2 form-control @error('place') is-invalid @enderror" type="text" name="place" value="{{$perfil['place']}}" placeholder="Seu endereço (cidade)...">
                                        </div>

                                        <div class="m-1">
                                            <label class="mt-2" for="image">{{ __('Escolha uma imagem para seu perfil:') }}</label> <br>
                                            <label for="image">{{$perfil['profile_picture']}}</label> <br>
                                            <input id="image" class="mt-2" type="file" name="image"> 
                                        </div>

                                        <div class="m-1">
                                            <button type="submit" class="mt-2 btn btn-primary">Atualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

