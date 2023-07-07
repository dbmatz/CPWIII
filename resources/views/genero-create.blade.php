@extends('layout')

@section('tittle', 'Cadastrar Genero')

@section('content')

<h1>Cadastro de Genero</h1>
<form method="post" enctype="multipart/form-data" action="{{route('genero-store')}}">
  @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" value="" name="nome" required>
    <br>
    <button class="btn btn-primary" type="submit" name="button">Salvar</button>
  </div>
</form>

@endsection