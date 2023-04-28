<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        return view('index');
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

    public function showProducerProfile()
    {
        return view('showProducerProfile');
    }

}
