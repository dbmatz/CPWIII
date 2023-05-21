@extends('layout')

@section('tittle', 'Novo genero')

@section('content')

<h1>Cadastro de Genero</h1>
<form action="{{ route('genero-store') }}" method="post">
@csrf
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="" name="nome">
  </div>
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection