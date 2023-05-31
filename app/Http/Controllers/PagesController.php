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
        $role = auth()->user()->role;

        if ($role == 'agricultor') {
            return view('dashboardProducer');
        }
        if ($role == 'consumidor') {
            return view('dashboardConsumer');
        }

    }

    public function showProducerProfile()
    {
        return view('showProducerProfile');
    }    

}
