@extends('layout')

@section('tittle', 'Novo Livro')

@section('content')

<h1>Cadastro de Livro</h1>
<form action="{{ route('livro-store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" required>
    </br>
    <label for="foto" class="form-label">Foto</label><br />
    <input id="foto" name="foto" type="file" accept="image/jpeg" class="form-control"/>
    <br>
    <label for="lido" class="form-label">Lido</label>
    <br>
    <input type="radio" class="form-check-input" name="lido" id="false" value="false" checked>
    <label for="lido">Não</label>
    <input type="radio" class="form-check-input" name="lido" id="true" value="true">
    <label for="lido">Sim</label>
    <br>
    <label for="nome" class="form-label">Autor</label>
    <select class="form-select" id="autor_id" name="autor_id" required>
      @foreach($autores as $autor)
      <option value="{{$autor->id}}">{{$autor->nome}}</option>
      @endforeach
    </select>
    </br>
    <label for="nome" class="form-label">Genero</label>
    <select class="form-select" id="genero_id" name="genero_id" required>
      @foreach($generos as $genero)
      <option value="{{$genero->id}}">{{$genero->nome}}</option>
      @endforeach
    </select>
    </br>
    <label for="nome" class="form-label">Editora</label>
    <select class="form-select" id="editora_id" name="editora_id" required>
      @foreach($editoras as $editora)
      <option value="{{$editora->id}}">{{$editora->nome}}</option>
      @endforeach
    </select>
    </br>
    <label for="nome" class="form-label">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao">
    </br>
    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection