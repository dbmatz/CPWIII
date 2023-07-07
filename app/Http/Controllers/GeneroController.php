<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
  public function index()
  {
    $generos = Genero::orderBy('id')->get();
    return view('genero', ['generos' => $generos]);
  }

  public function create()
  {
    return view('genero-create');
  }

  public function store(Request $request)
  {
    $genero = new Genero();
    $genero->nome = $request->input('nome');

    if ($genero->save()) {
      return redirect()->route('genero-index')->with('status', 'Gênero criado!');
    } else {
      return redirect()->route('genero-index')->withErrors('Não foi possivel salvar o gênero.');
    }
  }

  public function edit($id)
  {
    $generos = Genero::where('id', $id)->first();
    if (!empty($generos)) {
      return view('edit-genero', ['generos' => $generos]);
    } else {
      return redirect()->route('genero-index')->withErrors('Não foi possivel encontrar o gênero.');
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
        'nome' => $request->nome,
        'foto' => $imageName,
      ];
    } else {
      $data = [
        'nome' => $request->nome,
      ];
    }
    if (Genero::where('id', $id)->update($data)) {
      return redirect()->route('genero-index')->with('status', 'Gênero alterado!');
    } else {
      return redirect()->route('genero-index')->withErrors('Não foi possivel alterar o gênero.');
    }
  }

  public function destroy($id)
  {
    if (Genero::where('id', $id)->delete()) {
      return redirect()->route('genero-index')->with('status', 'Gênero deletado!');
    } else {
      return redirect()->route('genero-index')->withErrors('Não foi possivel deletar o gênero.');
    }
  }

  /*public function relatorio() {
    $generos = Genero::orderBy('id')->get();
    $pdf = Pdf::loadView('genero-relatorio', compact('generos'));
    return $pdf->download('generos.pdf');
  }*/
}
