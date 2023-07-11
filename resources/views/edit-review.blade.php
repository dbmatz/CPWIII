@extends('layout')

@section('tittle', 'Editar review')

@section('content')

<h1>Editar Livro</h1>
<form action="{{ route('review-update', ['id'=>$review->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $review->titulo }}" required>
        <br>
        <label for="resumo" class="form-label">Resumo</label>
        <input type="text" class="form-control" id="resumo" name="resumo" value="{{ $review->resumo }}" required>
        <br>
        <label for="descricao" class="form-label">Descricao</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $review->descricao }}" required>
        </br>
        <label for="avaliacao" class="form-label">Avaliacao</label>
        <input type="text" class="form-control" id="avaliacao" name="avaliacao" value="{{ $review->avaliacao }}" required>
        <br>
        <label for="livro_id" class="form-label">Livro</label>
        <select class="form-select" id="livro_id" name="livro_id" value="{{ $review->livro->titulo }}">
            @foreach($livros as $livro)
            <option value="{{$livro->id}}">{{$livro->titulo}}</option>
            @endforeach
        </select>
        </br>
        <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection