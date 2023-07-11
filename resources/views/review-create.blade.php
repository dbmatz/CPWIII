@extends('layout')

@section('tittle', 'Novo Review')

@section('content')

<h1>Cadastro de Review</h1>
<form action="{{ route('review-store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
        </br>
        <label for="resumo" class="form-label">Resumo</label><br />
        <input id="resumo" name="resumo" type="text" class="form-control" required />
        <br>
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" required>
        </br>
        <label for="avaliacao" class="form-label">Avaliacao</label>
        <input type="number" name="avaliacao" id="avaliacao" class="form-control" required>
        </br>
        <label for="livro" class="form-label">Livro</label>
        <select class="form-select" id="livro_id" name="livro_id" required>
            @foreach($livros as $livro)
            <option value="{{$livro->id}}">{{ $livro->titulo }}</option>
            @endforeach
        </select>
        <br>
        <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection