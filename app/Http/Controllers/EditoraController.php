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
    Editora::create($request->all());
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
