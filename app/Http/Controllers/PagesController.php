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
        return view('userDashboard');
       // return view ('userDashboard')->with('perfil', $atributos_do_banco);

    }

    public function showProducerProfile()
    {
        return view('showProducerProfile');
    }

   // public function listProducersProfiles($tipoUsuario)
    

}
