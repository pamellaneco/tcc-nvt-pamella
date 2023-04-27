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

            @foreach ($posts as $post)
                <div>
                    
                    <div class="card bg-white text-success mt-2 col-md-8">
                        <div class="card-header">{{ __('slug do post ou tag') }}</div>
    
                        <div class="card-body col-md-12">
                            <div class="card-content" id="card-content">
                                <div class="col-md-6">
                                    <h1>{{$post->title}}</h1>
                                    <h5>Criado por <strong> {{$post->user->name}}, em {{ date('jS M Y', strtotime($post->updated_at)) }} </strong>.</h5>
                                    <h3>{{$post->description}}</h3>
                                    <div class="col-md-4 w-50 p-3">
                                        <img src="/images/{{$post->image_path}}" alt="imagem da oferta"> 
                                    </div>
                                </div>
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
                                        <button class="btn btn-danger p-2 m-3" type="submit">
                                            Deletar
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection