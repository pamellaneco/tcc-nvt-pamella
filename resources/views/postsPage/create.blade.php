@extends('layouts.app')

@section('content')

<div class="container align-content-center justify-content-center">
    <div id="container1" class="align-content-center justify-content-center">
        <div class="col-md-12">
            <div id="banner" class="text-center p-3 w-20 text-white text-bold">
                <h1>Criar publicação</h1>
                <h2>Insira aqui as informações para publicar:</h2>
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
                                <div class="card-header">{{ __('Entre na sua conta:') }}</div>

                                <div class="card-body">
                                    <form class="col-md-12" id="form-posts" action="/postsPage/create" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="title">{{ __('Título:') }}</label>
                                            <input class="mt-2 form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Título da sua publicação...">
                                        </div>
                                        <div class="m-1">
                                            <label class="mt-2 col-md-8 col-form-label text-md-end" for="description">{{ __('Descrição:') }}</label>
                                            <textarea class="mt-2 form-control @error('description') is-invalid @enderror" name="description" placeholder="Descreva sua oferta aqui..."></textarea>
                                        </div>
                                        <div class="m-1">
                                            <label class="mt-2" for="image">{{ __('Escolha uma imagem para anexar:') }}</label> <br>
                                            <input onclick="checkSize();" class="mt-2" type="file" name="image"> <br>
                                            <div id="upload_error"></div>
                                            <script>
                                                function checkSize() {
                                                    let size = $('form-posts')['0'].firstChild.files['0'].size;
                                                    if (size >= 5048) {     
                                                        $('#upload_error').html("* Tamanho do arquivo não permitido.");
                                                    }
                                                }                                             
                                            </script>
                                        </div>
                                        <div class="m-1">
                                            <button type="submit" class="mt-2 btn btn-primary">Publicar</button>
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

