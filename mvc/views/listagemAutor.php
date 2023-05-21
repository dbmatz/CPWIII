<h1>Listagem de Autores</h1>
<a class="btn btn-primary mb-2" href="<?php echo APP; ?>autor/novo">Novo</a>
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
      foreach ($autores as $autor) {
          $path_editar = APP.'autor/editar';
          $path_excluir = APP.'autor/excluir';
          echo "
          <tr>
            <td>{$autor['id']}</td>
            <td>{$autor['nome']}</td>
            <td><a class='btn btn-primary' href='$path_editar/{$autor['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$path_excluir/{$autor['id']}'>-</a></td>
          </tr>
          ";
      }
     ?>
  </tbody>
</table>
