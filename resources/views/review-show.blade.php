@extends('layout')

@section('tittle', '{{$review->titulo}}')

@section('content')

<img src="imagens/{{$review->livro->foto}}" alt="">
<br>
<h1>{{$review->titulo}}</h1>
<br>
<h4>{{$review->resumo}}</h4>
<br>
<p>{{$review->descricao}}</p>

@endsection