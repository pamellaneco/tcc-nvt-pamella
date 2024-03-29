<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="/img/icon2.png" type="image/x-icon">

    <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body  id="intro" class="p-3 mb-10 bg-success">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-success">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/welcome') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if(((Route::current()->getName()) == 'profile') || (Route::current()->getName()) == 'showProducerProfile' || (Route::current()->getName()) == 'create' || (Route::current()->getName()) == '' || (Route::current()->getName()) == 'listProducersProfiles' || (Route::current()->getName()) == 'postsPage' )
                            <li>
                                <a class="nav-link" href="{{ url('/postsPage') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ofertas</a>
                            </li>
                        @endif
                        @if(((Route::current()->getName()) == 'profile') || (Route::current()->getName()) == 'showProducerProfile' || (Route::current()->getName()) == 'create' || (Route::current()->getName()) == '' || (Route::current()->getName()) == 'postsPage' )
                        @auth
                        <!--  
                            {{ Auth::user()->id }}
                            <li>
                                <a  href="{{ url('/postsPage/listProducersProfiles/' . Auth::user()->tipoUsuario) }}"  class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Produtores</a>
                            </li>
                        -->
                            <li>
                                <a  href="{{ url('/postsPage/listProducersProfiles/agricultor')}}"  class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Produtores</a>
                            </li>
                        @endauth

                        @endif
                        @if((Route::current()->getName()) == 'login' || (Route::current()->getName()) == 'create' || (Route::current()->getName()) == 'register' || (Route::current()->getName()) == 'profile' || (Route::current()->getName()) == 'postsPage' || (Route::current()->getName()) == 'showProducerProfile' || (Route::current()->getName()) == 'listProducersProfiles')
                            <li>
                                <a class="nav-link" href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Página inicial</a>
                            </li>
                        @endif
                       
                        @guest
                            @if((Route::current()->getName()) == '')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @endif

                            @if((Route::current()->getName()) == 'login')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>
                            @endif
                            
                            @if((Route::current()->getName()) == 'register')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(((Route::current()->getName()) == 'postsPage') || (Route::current()->getName()) == 'showProducerProfile' || (Route::current()->getName()) == 'create' || (Route::current()->getName()) == '' || (Route::current()->getName()) == 'listProducersProfiles')
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Meu perfil') }}
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
