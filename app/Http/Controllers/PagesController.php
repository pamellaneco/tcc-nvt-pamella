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

    }

    public function showProducerProfile()
    {
        return view('showProducerProfile');
    }

   // public function listProducersProfiles($tipoUsuario)
    

}
