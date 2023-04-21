@extends('layouts.app')

@section('content')

<div class="container align-content-center justify-content-center">
    <div id="container1" class="align-content-center justify-content-center">
        <div class="col-md-12">
            <div id="teste" class="text-center p-3 w-20 text-white text-bold">
                <h1>Página de ofertas pela visão de um agricultor</h1>
                <h2>Postagens mais recentes</h2>
            <style>
                #teste {
                    background-image: url('/img/image4.jpg');
                }
                #teste2{
                    display: flex;
                    flex-direction: row;
                }
            </style>
            </div>

            @if (session()->has('message'))
                <div class="m-1">
                    <p class="m-1 bg-white text-success">
                        {{ session ()->get('message')}}
                    </p>
                </div>
            @endif
            
            @if (Auth::check (auth()->user()->tipoUsuario == 'agricultor'))
                <a href="/postsPage/create" type="submit" class="btn btn-warning m-3">
                    {{ __('Criar publicação') }}
                </a>
            @endif

            @foreach ($posts as $post)
                <div class="card bg-white text-success mt-2 col-md-8">
                    <div class="card-header">{{ __('slug do post ou tag') }}</div>

                    <div class="card-body col-md-12">
                        <div class="card-content" id="teste2">
                            <div class="col-md-6">
                                <h1>{{$post->title}}</h1>
                                <h5>Criado por <strong> {{$post->user->name}}, em {{ date('jS M Y', strtotime($post->updated_at)) }} </strong>.</h5>
                                <h3>{{$post->description}}</h3>
                            </div>
                            <!-- criei esse aqui caso seja necessário, mas não acho que vá usar essa funcionalidade
                            <a href="/postsPage/{{ $post->slug}}"> Continuar leitura</a>
                            -->
                            <div class="col-md-4">
                            <img src="/images/{{$post->image_path}}" alt="" srcset=""> 
                        </div>
                        <a href="/postsPage/show/{{$post->id}}" type="submit" class="btn btn-warning m-3">
                            {{ __('Editar publicação') }}
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection