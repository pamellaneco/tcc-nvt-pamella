@extends('layouts.app')

@section('content')
<style>
    #intro {
        background-image: url('img/image4.jpg');
        height: 100vh;
        background-size:cover;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="justify-content-center align-items-center text-align-center">
                    <div class="card-header">{{ __('Preencha esse formulário para criar sua conta:') }}</div>
    
                    <div class="card-body col-md-12">
                        <form method="POST" action="{{ route('register') }}" class="display-flex justify-content-center align-items-center text-align-center">
                            @csrf

                            <div class="row md-8 justify-content-center align-items-center text-align-center">
                                <label for="tipoUsuario" class="col-md-8 col-form-label text-md-center">Informe se você é agricultor ou consumidor:</label> 
                                <div class="row md-8 m-1 text-md-center justify-content-center align-items-center">
                                    <div>
                                        <input type="radio" name="tipoUsuario" id="agricultor" value="agricultor">
                                        <label for="agricultor">Agricultor</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="tipoUsuario" id="consumidor" value="consumidor">
                                        <label for="consumidor">Consumidor</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Informe seu nome completo">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email:') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="exemplo@gmail.com">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Crie uma senha segura">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme sua senha') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repita a senha criada">
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="col-md-12 offset-md-5 mb-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
