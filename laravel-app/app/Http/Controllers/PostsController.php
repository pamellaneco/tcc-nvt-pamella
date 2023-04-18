<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsPage()
    {
        /*
            tô com dificuldade de fazer essa relação aqui:
            coloquei producer porque é nele que ocorre a ação 
            até agora, mas é preciso achar um modo de liberar os 
            posts para o consumidor ver também  
        */  
        return view ('producerPostsPage')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    /*
    como era antes:

    public function postsPage()
    {s
        $tipoUsuario = auth()->user()->tipoUsuario;

        if ($tipoUsuario == 'agricultor') {
            return view('producerPostsPage');
        }
        if ($tipoUsuario == 'consumidor') {
            return view('consumerPostsPage');
        }
    }
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postsPage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . "-" . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
