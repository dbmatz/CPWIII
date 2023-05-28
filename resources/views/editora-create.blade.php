@extends('layout')

@section('tittle', 'Nova Editora')

@section('content')

<h1>Cadastro de Editora</h1>
<form action="{{ route('editora-store') }}" method="post">
@csrf
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="" name="nome">
      </br>
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection