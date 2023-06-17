<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Genero;
use App\Models\Editora;
use Illuminate\Support\Facades\DB;

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
    $generos = Genero::all();
    $editoras = Editora::all();
    $autores = Autor::all();
    return view('livro-create', ['generos' => $generos, 'editoras' => $editoras, 'autores' => $autores]);
  }

  public function store(Request $request)
  {
    $livro = new Livro();
    $livro->titulo = $request->input('titulo');
    $livro->quantidade = $request->input('quantidade');
    $livro->autor_id = $request->input('autor_id');
    $livro->genero_id = $request->input('genero_id');
    $livro->editora_id = $request->input('editora_id');

    if ($request->hasFile('foto')) {
      $arquivo = $request->file('foto');
      $destPath = public_path('imagens');
      $imageName = time() . '_' . $arquivo->getClientOriginalName();
      $arquivo->move($destPath, $imageName);
      $livro->foto = "/" . $imageName;
    } else {
      $livro->foto = "default.jpg";
    }

    $livro->save();
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
    if ($request->hasFile('foto')) {
      $arquivo = $request->file('foto');
      $destPath = public_path('imagens');
      $imageName = time() . '_' . $arquivo->getClientOriginalName();
      $arquivo->move($destPath, $imageName);
      $data = [
        'titulo' => $request->titulo,
        'quantidade' => $request->quantidade,
        'id_genero' => $request->id_genero,
        'id_autor' => $request->id_autor,
        'id_editora' => $request->id_editora,
        'foto' => $imageName,
      ];
    } else {
      $data = [
        'titulo' => $request->titulo,
        'quantidade' => $request->quantidade,
        'id_genero' => $request->id_genero,
        'id_autor' => $request->id_autor,
        'id_editora' => $request->id_editora,
      ];
    }
    Livro::where('id', $id)->update($data);
    return redirect()->route('livro-index');
  }

  public function destroy($id)
  {
    Livro::where('id', $id)->delete();
    return redirect()->route('livro-index');
  }
}
