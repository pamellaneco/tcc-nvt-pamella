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
       /*
        $flight = Post::find(1);
       $atributos = $flight->getAttributes();
       
       return view ('producerPostsPage')->with('posts', $atributos );
       */
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
        /*
        $flight = Post::find(1);
        $atributos = $flight->getAttributes();
        */
        
     //   dd($atributos['image_path']);   
        
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
    //aqui eu mostro o form para edição e o action do form vai pra rota update (que chama o método "edit" abaixo):
    public function show($id)
    {
        $variavel_com_dados_do_banco = Post::find($id);
        $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();
        return view ('postsPage.show')->with('post', $atributos_do_banco );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //aqui eu realizo a edição e redireciono para o index dos posts listados
    public function edit($id, Request $request)
    {
        //validar se existe na base de dados o id passado (como em show):
            $variavel_com_dados_do_banco = Post::find($id);
            $atributos_do_banco = $variavel_com_dados_do_banco ->getAttributes();
           // return view ('postsPage.update')->with('post', $atributos_do_banco );

        //criar update pegando as informações do input (como em store):
            $request ->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            ]);
    
            $newImageName = uniqid() . "-" . $request->title . '.' . $request->image->extension();
            
            $request->image->move(public_path('images'), $newImageName);
    
            Post::where('id', $id)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);
        
            /*
            esse return redirecionando é porque eu quero que exiba a mensagem de publicação atualizada 
            e tbm envie as variáveis atualizadas no post
            */
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
        //
    }
}
