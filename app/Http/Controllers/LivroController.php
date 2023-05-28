<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
  public function index()
  {
    $livros = Livro::all();
    return view('livro', ['livros' => $livros]);
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
