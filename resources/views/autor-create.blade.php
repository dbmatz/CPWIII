@extends('layout')

@section('tittle', 'Novo Autor')

@section('content')

<h1>Cadastro de Autor</h1>
<form action="{{ route('autor-store') }}" method="post">
  @csrf
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
</br>
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>

@endsection