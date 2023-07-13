@extends('layout')

@section('tittle', 'Syscat')

@section('content')
<h1>Reviews</h1>
<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($reviews as $review)
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="imagens/{{$review->livro->foto}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$review->titulo}}</h5>
                <p>{{$review->resumo}}</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>

<br>
<br>
<h1>Próximos livros a serem lidos</h1>
@foreach($livros as $livro)
<div class="card" style="width: 18rem;">
    <img src="imagens/{{$livro->foto}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$livro->titulo}}</h5>
        <p class="card-text">{{$livro->descricao}}</p>
    </div>
</div>
@endforeach
@endsection