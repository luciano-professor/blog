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

}
