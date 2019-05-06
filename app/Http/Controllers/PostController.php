<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function posts()
    {

        $dados = DB::select('SELECT * FROM posts');

        return view('posts')->with('posts', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('form-adicionar');
    }

    /**
     * Método que vai adicionar um post no BD
     */
    public function adicionar(Request $request)
    {
        //Pegando os dados dod formulario que vieram na requisicao
        $titulo = $request->input('titulo');
        $texto = $request->input('texto');

        DB::insert('INSERT INTO posts (titulo, texto) VALUES (?, ?)', [$titulo, $texto]);

        return redirect()->action('PostController@posts');

    }

}
