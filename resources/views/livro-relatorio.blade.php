<h1>Relatorio de Livros</h1>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Foto</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Genero</th>
      <th>Editora</th>
      <th>Quantidade</th>
    </tr>
  </thead>
  <tbody>
    @foreach($livros as $livro)
    <tr>
      <td>{{ $livro->id }}</td>
      <td><img src="imagens/{{ $livro->foto }}" alt=""></td>
      <td>{{ $livro->titulo }}</td>
      <td>{{ $livro->genero->nome }}</td>
      <td>{{ $livro->editora->nome }}</td>
      <td>{{ $livro->autor->nome }}</td>
      <td>{{ $livro->quantidade }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection