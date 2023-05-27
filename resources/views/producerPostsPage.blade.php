@extends('layouts.app')

@section('content')

<div class="container align-content-center justify-content-center">
    <div id="container1" class="align-content-center justify-content-center">
        <div class="col-md-12">
            <div id="banner" class="text-center p-3 w-20 text-white text-bold">
                <h1>Página de ofertas</h1>
                <h2>Postagens mais recentes</h2>
            <style>
                #banner {
                    background-image: url('/img/image4.jpg');
                }
                #card-content{
                    display: flex;
                    flex-direction: row;
                }
                #message {
                    width:fit-content;
                    padding: 0.5em;
                    text-align: center;
                    border-radius: 6%;
                }
                .containerMaior {
                    display: flex;
                    align-items: center;
                    align-content: center;
                    justify-content: center;
                    flex-direction: column;
                    flex-wrap: nowrap;
                }
            </style>
            </div>

            @if (session()->has('message'))
                <div class="m-1">
                    <p id="message" class="m-2 bg-white text-success">
                        {{ session ()->get('message')}}
                    </p>
                </div>
            @endif
            
            @if (Auth::check() && Auth::user()->tipoUsuario == 'agricultor')
                <a href="/postsPage/create" type="submit" class="btn btn-warning m-3">
                    {{ __('Criar publicação') }}
                </a>
            @endif

            <div class="containerMaior">
            @foreach ($posts as $post)
                <div class="containerMaior">
                    
                    <div class="card bg-white text-success mt-2 col-md-12">
                        <div class="card-header">{{ __('slug do post ou tag') }}</div>
    
                        <div class="card-body col-md-12">
                            <div class="card-content d-flex flex-direction-row flex-wrap" id="card-content">
                                <div class="col-md-12 d-flex flex-direction-row flex-wrap">
                                    <div class="col-md-6 p-1">
                                        <h1>{{$post->title}}</h1>
                                        <div>
                                            <h5>Criado por <a href="/postsPage/showProducerProfile"><strong> {{$post->user->name}}</strong></a><strong>, em {{ date('jS M Y', strtotime($post->updated_at)) }} </strong>.</h5>
                                            <div class="col-md-4 w-30 p-1 border-radius-6">
                                                <img src="/profile_pictures/{{auth()->user()->profile_picture}}" alt="foto de perfil" width="30%">
                                            </div>
                                        </div>
                                        
                                        <h3>{{$post->description}}</h3>
                                    </div>
                                    <div class="col-md-6 p-1 d-flex flex-direction-row">
                                        <img src="/images/{{$post->image_path}}" alt="imagem da oferta" width="50%"> 
                                        <div>
                                            @if (Auth::check() && Auth::user()->tipoUsuario == 'agricultor')
                                                <div>
                                                    <a href="/postsPage/show/{{$post->id}}" type="submit" class="btn btn-warning m-3">
                                                        {{ __('Editar publicação') }}
                                                    </a>
                                                </div>
                                                <div>
                                                    <form action="/postsPage/delete/{{$post->id}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger w-50 p-2 m-3" type="submit">
                                                            Deletar
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection