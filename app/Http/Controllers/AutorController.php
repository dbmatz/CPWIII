<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
  public function index()
  {
    $autores = Autor::all();
    return view('autor', ['autores' => $autores]);
  }

  public function create()
  {
    return view('autor-create');
  }

  public function store(Request $request)
  {
    $autor = new Autor();
    $autor->nome = $request->input('nome');

    if ($request->hasFile('foto')) {
      $arquivo = $request->file('foto');
      $destPath = public_path('imagens');
      $imageName = time() . '_' . $arquivo->getClientOriginalName();
      $arquivo->move($destPath, $imageName);
      $autor->foto = $imageName;
    }else{
      $autor->foto = "default_user.jpg";
    }
    
    $autor->save();
    return redirect()->route('autor-index');
  }

  public function edit($id)
  {
    $autores = Autor::where('id', $id)->first();
    if (!empty($autores)) {
      return view('edit-autor', ['autores' => $autores]);
    } else {
      return redirect()->route('autor-index');
    }
  }

  public function update(Request $request, $id)
  {
    $data = [
      'nome' => $request->nome,
    ];
    Autor::where('id', $id)->update($data);
    return redirect()->route('autor-index');
  }

  public function destroy($id)
  {
    Autor::where('id', $id)->delete();
    return redirect()->route('autor-index');
  }
}
