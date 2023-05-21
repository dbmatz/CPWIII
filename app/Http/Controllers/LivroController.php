<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){
        $livros = Livro::all();
        return view('livro', ['livros'=>$livros]);
      }

      public function create(){
        return view('livro-create');
      }

      public function store(Request $request){
        Livro::create($request->all());
        return redirect()->route('livro-index');
      }
}
