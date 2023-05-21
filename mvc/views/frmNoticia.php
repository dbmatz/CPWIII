<h1>Cadastro de Notícia</h1>
<form action="<?php echo APP; ?>noticia/salvar" method="post">
  <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input readonly type="text" class="form-control" id="id" value="<?php echo $noticia['id']; ?>" name="id">
  </div>
  <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" value="<?php echo $noticia['titulo']; ?>" name="titulo">
  </div>

  <div class="mb-3">
      <label for="texto" class="form-label">Texto</label>
      <textarea class="form-control" id="texto" name="texto"><?php echo $noticia['texto']; ?></textarea>
  </div>

  <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <select class="form-select" name="categoria_id" id="categoria_id">
        <?php
          foreach ($categorias as $categoria) {
            $selected =
              $categoria['id'] == $noticia['categoria_id']?'selected':'';

            echo "<option $selected value='{$categoria['id']}'>{$categoria['descricao']}</option>";
          }
         ?>
      </select>
  </div>

  <div class="mb-3">
      <label for="data" class="form-label">Data</label>
      <input type="date" class="form-control" id="data" value="<?php echo $noticia['data']; ?>" name="data">
  </div>

  <div class="mb-3">
      <label for="autor" class="form-label">Autor</label>
      <select class="form-select" name="autor_id" id="autor_id">
        <?php
          foreach ($autores as $autor) {
            $selected =
              $autor['id'] == $noticia['autor_id']?'selected':'';

            echo "<option $selected value='{$autor['id']}'>{$autor['nome']}</option>";
          }
         ?>
      </select>
  </div>
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
