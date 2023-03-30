<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postsPage()
    {
        $tipoUsuario = auth()->user()->tipoUsuario;

        if ($tipoUsuario == 'agricultor') {
            return view('producerPostsPage');
        }
        if ($tipoUsuario == 'consumidor') {
            return view('consumerPostsPage');
        }
    }

    public function profile()
    {
        $tipoUsuario = auth()->user()->tipoUsuario;

        if ($tipoUsuario == 'agricultor') {
            return view('dashboardProducer');
        }
        if ($tipoUsuario == 'consumidor') {
            return view('dashboardConsumer');
        }

    }
}
