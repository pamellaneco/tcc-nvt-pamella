<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class ProfilesController extends Controller
{
    public function listProducersProfiles()
    {
        $role = "agricultor";
        $users = User::where('role', $role);
        return view ('listProducersProfiles')->with('users', $users->get());
    }
    
    public function showEditForm($id) //aqui é pra levar ao form de edição
    { 
        $db_data = User::find($id);
        $db_attributes = $db_data ->getAttributes();
        return view ('updateUserProfile')->with('profile', $db_attributes);
    }

    public function edit($id, Request $request) //aqui é pra editar
    {
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'place' => $request->input('place'),
            'phone' => $request->input('phone'),
        ]);

        return redirect('/profile')->with('message', 'Seu perfil foi atualizado com sucesso!');
    }

}
