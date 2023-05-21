<h1>Listagem de Generos</h1>
<a class="btn btn-primary mb-2" href="<?php echo APP; ?>genero/novo">Novo</a>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($generos as $genero) {
          $path_editar = APP.'genero/editar';
          $path_excluir = APP.'genero/excluir';
          echo "
          <tr>
            <td>{$genero['id']}</td>
            <td>{$genero['nome']}</td>
            <td><a class='btn btn-primary' href='$path_editar/{$genero['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$path_excluir/{$genero['id']}'>-</a></td>
          </tr>
          ";
      }
     ?>

  </tbody>
</table>
