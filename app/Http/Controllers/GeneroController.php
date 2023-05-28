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

      public function edit($id){
        $generos = Genero::where('id', $id)->first();
        if(!empty($generos)){
          return view('edit-genero', ['generos'=>$generos]);
        }else{
          return redirect()->route('genero-index');
        }
      }
    
      public function update(Request $request, $id){
        $data = [
          'nome' => $request->nome,
        ];
        Genero::where('id', $id)->update($data);
        return redirect()->route('genero-index');
      }
}
