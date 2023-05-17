<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


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

   // public function listProducersProfiles($tipoUsuario)
    public function listProducersProfiles()
    {

       // $usuarios = User::where('tipoUsuario', $tipoUsuario);
        $tipoUsuario = "agricultor";
        $usuarios = User::where('tipoUsuario', $tipoUsuario);
        return view ('listProducersProfiles')->with('usuarios', $usuarios->get());

    }

}
