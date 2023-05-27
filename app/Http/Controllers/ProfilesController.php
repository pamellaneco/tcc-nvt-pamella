<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;

class ProfilesController extends Controller
{
    public function listProducersProfiles()
    {

        $tipoUsuario = "agricultor";
        $usuarios = User::where('tipoUsuario', $tipoUsuario);
        return view ('listProducersProfiles')->with('usuarios', $usuarios->get());

    }
    
    public function showEditForm($id) //aqui é pra levar ao form de edição
    { 
        $variavel_com_dados_do_banco = User::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();
        return view ('updateUserProfile')->with('perfil', $atributos_do_banco);
        
    }

    public function edit($id, Request $request) //aqui é pra editar
    {
        
        $variavel_com_dados_do_banco = User::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();

        if (isEmpty($request->input('image'))) {
            $request ->validate([
                'image' => 'mimes:jpg,png,jpeg|max:5048'
            ]);
            $newImageName = uniqid() . "-" . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('profile_pictures'), $newImageName);
        } else {
            $newImageName = $atributos_do_banco['profile_pictures'];
        }
       
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'place' => $request->input('place'),
            'phone' => $request->input('phone'),
            'products' => $request->input('products'),
            'profile_picture' => $newImageName,
            //'user_id' => auth()->user()->id
        ]);

        $variavel_com_dados_do_banco = User::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();
        return redirect('/profile')->with('message', 'Seu perfil foi atualizado com sucesso!');

    }

}
