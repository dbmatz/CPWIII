<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
    public function index(){
        $generos = Genero::all();
        return view('genero', ['generos'=>$generos]);
      }

      public function create(){
        return view('genero-create');
      }

      public function store(Request $request){
        Genero::create($request->all());
        return redirect()->route('genero-index');
      }
}
