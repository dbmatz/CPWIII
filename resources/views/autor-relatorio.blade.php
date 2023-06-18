<h1>Relatorio de Autores</h1>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID
      <th>
      <th>Foto
      <th>
      <th>Nome
      <th>
    </tr>
    <tdead>
  <tbody>
    @foreach($autores as $autor)
    <tr>
      <td>{{ $autor->id }}
      <td>
      <td><img src="/imagens/{{$autor->foto}}">
      <td>
      <td>{{ $autor->nome }}
      <td>
    </tr>
    @endforeach
  </tbody>
</table>