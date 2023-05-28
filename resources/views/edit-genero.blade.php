@extends('layout')

@section('tittle', 'Editar genero')

@section('content')

<h1>Editar Genero</h1>
<form action="{{ route('genero-update', ['id'=>$generos->id]) }}" method="post">
@csrf
@method('PUT')
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="{{ $generos->nome }}" name="nome">
      </br>
      <button class="btn btn-primary" type="submit" name="button">Salvar</button>
  </div>
</form>

@endsection