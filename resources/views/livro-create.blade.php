@extends('layout')

@section('tittle', 'Novo Livro')

@section('content')

<h1>Cadastro de Livro</h1>
<form action="{{ route('livro-store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
    </br>
    <label for="nome" class="form-label">Quantidade</label>
    <input type="number" class="form-control" id="quantidade" name="quantidade">
    </br>
    <label for="nome" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor">
    </br>
    <label for="nome" class="form-label">Genero</label>
    <input type="text" class="form-control" id="genero" name="genero">
    </br>
    <label for="nome" class="form-label">Editora</label>
    <input type="text" class="form-control" id="editora" name="editora">
    </br>
    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection