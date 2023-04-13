@extends('layouts.app')

@section('content')
<style>
      #intro {
        background-image: url('img/image2.jpg');
        height: 100vh;
        background-size:cover;
      }
      #container1 {
        margin-top: 3em;
      }
</style>
<div class="container">
        <div id="container1" class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-success text-white">
                    <div class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center align-content-center text-align-center">
                            <div class="col-md-10 m-2">
                                <h3>A plataforma de serviços à agricultura familiar mais prática para você</h3>
                            </div>
                            <div class="container row justify-content-center">
                                <div class="col-md-5 m-1 p-1">
                                    <img class="img-fluid" src="/img/image1.jpeg" alt="imagem ilustrativa de uma cesta com vegetais">
                                    <strong>
                                        Você consumidor...
                                    </strong>
                                    <p>Tenha acesso, de forma rápida e prática, a um catálogo de produtores para escolher os melhores produtos, prazos e frete em uma só plataforma gratuita.</p>
                                </div>
                                <div class="col-md-5 m-1 p-1">
                                    <strong>
                                        Você produtor...
                                    </strong>
                                    <p>Consiga contato mais fácil com seus clientes fiéis e conheça novos compradores através da nossa plataforma. Em poucos passos, retiramos o intermediário do seu caminho e facilitamos o seu processo de venda.</p>
                                    <img class="img-fluid" src="/img/image3.jpg" alt="imagem ilustrativa de uma cesta com vegetais">
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
    <div id="container1" class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-white text-success">
                    <div class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        <div class="faq row">
                            <div class="cliente col-6 p-2 justify-content-center">
                                <h3>Perguntas comuns por clientes</h3>
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                            </div>
                            <div class="agricultor col-6 p-2 justify-content-center">
                                <h3>Perguntas comuns por agricultores</h3>
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                    
                                <div class="pergunta">
                                    <h4>Pergunta</h4>
                                    <p class="respostas">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Resposta
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container footer bg-success text-white mt-5 col-12 p-2 justify-content-flex-end">
        <h5>Desenvolvido por Pâmella Kyrla para Novos Titans</h5>
    </div>

@endsection
