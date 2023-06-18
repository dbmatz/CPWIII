<h1>Relatorio de Generos</h1>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Foto</th>
      <th>Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach($generos as $genero)
    <tr>
      <td>{{ $genero->id }}</td>
      <td><img src="/imagens/{{ $genero->foto }}" alt=""></td>
      <td>{{ $genero->nome }}</td>
    </tr>
    @endforeach
  </tbody>
</table>