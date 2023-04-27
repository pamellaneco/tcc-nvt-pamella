<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use function PHPUnit\Framework\isNull;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['postsPage', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsPage()
    {
        return view ('producerPostsPage')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    
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

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/postsPage')->with('message', 'Sua oferta foi publicada;');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variavel_com_dados_do_banco = Post::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();
        return view ('postsPage.show')->with('post', $atributos_do_banco);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //validar se existe na base de dados o id passado (como em show):
        $variavel_com_dados_do_banco = Post::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();

            
        if (!isNull($request->input('image'))) {
            $request ->validate([
                'image' => 'mimes:jpg,png,jpeg|max:5048'
            ]);
            $newImageName = uniqid() . "-" . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
        } else {
            $newImageName = $atributos_do_banco['image_path'];
        }

        Post::where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/postsPage')->with('message', 'Sua publicação foi atualizada;');
        
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
    $post = Post::where('id', $id);
    $post -> delete();
    return redirect()->route('postsPage')->with('message','Deletado');

    }


}
