<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditoraController extends Controller
{
  public function index()
  {
    $editoras = Editora::all();
    return view('editora', ['editoras' => $editoras]);
  }

  public function create()
  {
    return view('editora-create');
  }

  public function store(Request $request)
  {
    $editora = new Editora();
    $editora->nome = $request->input('nome');

    if ($request->hasFile('foto')) {
      $arquivo = $request->file('foto');
      $destPath = public_path('imagens');
      $imageName = time() . '_' . $arquivo->getClientOriginalName();
      $arquivo->move($destPath, $imageName);
      $editora->foto = "/" . $imageName;
    }else{
      $editora->foto = "default.jpg";
    }
    
    $editora->save();
    return redirect()->route('editora-index');
  }

  public function edit($id)
  {
    $editoras = Editora::where('id', $id)->first();
    if (!empty($editoras)) {
      return view('edit-editora', ['editoras' => $editoras]);
    } else {
      return redirect()->route('editora-index');
    }
  }

  public function update(Request $request, $id)
  {
    $data = [
      'nome' => $request->nome,
    ];
    Editora::where('id', $id)->update($data);
    return redirect()->route('editora-index');
  }

  public function destroy($id)
  {
    Editora::where('id', $id)->delete();
    return redirect()->route('editora-index');
  }
}
