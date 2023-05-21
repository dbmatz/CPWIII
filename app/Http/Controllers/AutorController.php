<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
  public function index(){
    $autores = Autor::all();
    return view('autor', ['autores'=>$autores]);
  }

  public function create(){
    return view('autor-create');
  }

  public function store(Request $request){
    Autor::create($request->all());
    return redirect()->route('autor-index');
  }
}
