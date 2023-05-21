<h1>Listagem de Editoras</h1>
<a class="btn btn-primary mb-2" href="<?php echo APP; ?>editora/novo">Novo</a>
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
      foreach ($editoras as $editora) {
          $path_editar = APP.'editora/editar';
          $path_excluir = APP.'editora/excluir';
          echo "
          <tr>
            <td>{$editora['id']}</td>
            <td>{$editora['nome']}</td>
            <td><a class='btn btn-primary' href='$path_editar/{$editora['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$path_excluir/{$editora['id']}'>-</a></td>
          </tr>
          ";
      }
     ?>
  </tbody>
</table>
