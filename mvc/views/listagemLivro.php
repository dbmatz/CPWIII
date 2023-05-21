<h1>Listagem de Livros</h1>
<a class="btn btn-primary mb-2" href="<?php echo APP; ?>livro/novo">Novo</a>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Quantidade</th>
      <th>Genero</th>
      <th>Autor</th>
      <th>Editora</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($livros as $livro) {
          $path_editar = APP.'livro/editar';
          $path_excluir = APP.'livro/excluir';
          echo "
          <tr>
            <td>{$livro['id']}</td>
            <td>{$livro['titulo']}</td>
            <td>{$livro['quantidade']}</td>
            <td>{$livro['genero_nome']}</td>
            <td>{$livro['autor_nome']}</td>
            <td>{$livro['editora_nome']}</td>
            <td><a class='btn btn-primary' href='$path_editar/{$livro['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$path_excluir/{$livro['id']}'>-</a></td>
          </tr>
          ";
      }
     ?>

  </tbody>
</table>
