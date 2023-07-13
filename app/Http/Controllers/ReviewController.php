<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Livro;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::orderBy('id')->get();
        return view('review', ['review' => $review]);
    }

    public function create()
    {
        $livros = Livro::all();
        return view('review-create', ['livros' => $livros]);
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->titulo = $request->input('titulo');
        $review->resumo = $request->input('resumo');
        $review->descricao = $request->input('descricao');
        $review->avaliacao = $request->input('avaliacao');
        $review->livro_id = $request->input('livro_id');

        $livro = new Livro();
        $livro = Livro::find($request->input('livro_id'));
        $livro->lido = true;
        $livro->save();

        if ($review->save()) {
            return redirect()->route('review-index')->with('status', 'Review criado!');
        } else {
            return redirect()->route('review-index')->withErrors('Não foi possivel salvar o review.');
        }
    }

    public function edit($id)
    {
        $review = Review::where('id', $id)->first();
        if (!empty($review)) {
            $livros = Livro::all();
            return view('edit-review', ['review' => $review, 'livros' => $livros]);
        } else {
            return redirect()->route('review-index')->withErrors('Não foi possivel encontrar o review.');
        }
    }

    public function update(Request $request, $id)
    {

        $data = [
            'titulo' => $request->titulo,
            'resumo' => $request->resumo,
            'descricao' => $request->descricao,
            'avaliacao' => $request->avaliacao,
            'livro_id' => $request->livro_id,
        ];
        if (Review::where('id', $id)->update($data)) {
            return redirect()->route('review-index')->with('status', 'Review alterado!');
        } else {
            return redirect()->route('review-index')->withErrors('Não foi possivel alterar o review.');
        }
    }

    public function destroy($id)
    {
        if (Review::where('id', $id)->delete()) {
            return redirect()->route('review-index')->with('status', 'Review deletado!');
        } else {
            return redirect()->route('review-index')->withErrors('Não foi possivel deletar o review.');
        }
    }

    public function show($id)
    {
        $review = Review::find($id);

        if (!empty($review)) {
            return view('review-show', ['review' => $review]);
        } else {
            return redirect()->route('review-index')->withErrors('Não foi possivel achar o review.');
        }
    }

    /*public function relatorio() {
    $review = Review::orderBy('id')->get();
    $pdf = Pdf::loadView('review-relatorio', compact('review'));
    return $pdf->download('review.pdf');
  }*/
}
