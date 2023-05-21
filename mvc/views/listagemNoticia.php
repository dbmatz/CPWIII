<h1>Listagem de Notícias</h1>
<a class="btn btn-primary mb-2" href="<?php echo APP; ?>noticia/novo">Novo</a>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Categoria</th>
      <th>Data</th>
      <th>Autor</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($noticias as $noticia) {
          $data = date("d/m/Y", strtotime($noticia['data']));
          $path_editar = APP.'noticia/editar';
          $path_excluir = APP.'noticia/excluir';
          echo "
          <tr>
            <td>{$noticia['id']}</td>
            <td>{$noticia['titulo']}</td>
            <td>{$noticia['categoria_descricao']}</td>
            <td>$data</td>
            <td>{$noticia['autor_nome']}</td>
            <td><a class='btn btn-primary' href='$path_editar/{$noticia['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$path_excluir/{$noticia['id']}'>-</a></td>
          </tr>
          ";
      }
     ?>

  </tbody>
</table>
