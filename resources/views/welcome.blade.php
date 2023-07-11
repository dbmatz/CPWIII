@extends('layout')

@section('tittle', 'Syscat')

@section('content')

<h1 style="text-align: center;">Site de Livros</h1>

<h2>Descrição</h2>
<p>Este site visa o controle sobre o estoque de livros, contendo diversas editoras, gêneros ou autores.</p>
<br>
<div style="display: flex; justify-content: center;">
    <img src="https://revisaoparaque.com/wp-content/uploads/2014/12/cat-reading.gif" alt="" style="width: 20rem; height: 20rem;">
</div>

<div class="carousel-item">
    @foreach($reviews as $review)
    <img src="imagens/{{ $review->livro->foto }}" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <h5>{{ $review->livro->titulo }}</h5>
        <p>{{ $review->resumo }}</p>
    </div>
    @endforeach
</div>

<br>
<br>

<h1>Reviews</h1>
@foreach($reviews as $review)
<div class="card" style="width: 18rem; height: 20rem;">
    <img class="card-img-top" src="imagens/{{ $review->livro->foto }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $review->livro->titulo }}</h5>
        <p class="card-text">{{ $review->resumo }}</p>
    </div>
</div>
@endforeach

@endsection