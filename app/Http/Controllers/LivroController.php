<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Genero;
use App\Models\Editora;

class LivroController extends Controller
{
  public function index()
  {
    $livros = Livro::all();
    $autores = Autor::all();
    $generos = Genero::all();
    $editoras = Editora::all();
    return view('livro', ['livros' => $livros, 'autores' => $autores, 'generos' => $generos, 'editoras' => $editoras]);
  }

  public function create()
  {
    return view('livro-create');
  }

  public function store(Request $request)
  {
    Livro::create($request->all());
    return redirect()->route('livro-index');
  }

  public function edit($id)
  {
    $livros = Livro::where('id', $id)->first();
    if (!empty($livros)) {
      return view('edit-livro', ['livros' => $livros]);
    } else {
      return redirect()->route('livro-index');
    }
  }

  public function update(Request $request, $id)
  {
    $data = [
      'titulo' => $request->titulo,
      'quantidade' => $request->quantidade,
      'id_genero' => $request->id_genero,
      'id_autor' => $request->id_autor,
      'id_editora' => $request->id_editora,
    ];
    Livro::where('id', $id)->update($data);
    return redirect()->route('livro-index');
  }

  public function destroy($id)
  {
    Livro::where('id', $id)->delete();
    return redirect()->route('livro-index');
  }
}
