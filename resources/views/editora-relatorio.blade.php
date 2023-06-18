<h1>Relatorio de Editoras</h1>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Foto</th>
      <th>Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach($editoras as $editora)
    <tr>
      <td>{{ $editora->id }}</td>
      <td><img src="imagens/{{ $editora->foto }}" alt=""></td>
      <td>{{ $editora->nome }}</td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>