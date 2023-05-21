<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditoraController extends Controller
{
    public function index(){
        $editoras = Editora::all();
        return view('editora', ['editoras'=>$editoras]);
      }

      public function create(){
        return view('editora-create');
      }

      public function store(Request $request){
        Editora::create($request->all());
        return redirect()->route('editora-index');
      }
}
