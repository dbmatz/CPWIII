<h1>Cadastro de Livros</h1>
<form action="<?php echo APP; ?>livro/salvar" method="post">
  <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input readonly type="text" class="form-control" id="id" value="<?php echo $livro['id']; ?>" name="id">
  </div>
  <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" value="<?php echo $livro['titulo']; ?>" name="titulo">
  </div>
  <div class="mb-3">
      <label for="quantidade" class="form-label">Quantidade</label>
      <input type="text" class="form-control" id="quantidade" value="<?php echo $livro['quantidade']; ?>" name="quantidade">
  </div>



  <div class="mb-3">
      <label for="genero" class="form-label">Genero</label>
      <select class="form-select" name="id_genero" id="id_genero">
        <?php
          foreach ($generos as $genero) {
            $selected =
              $genero['id'] == $livro['id_genero']?'selected':''; 

            echo "<option $selected value='{$genero['id']}'>{$genero['nome']}</option>";
          }
         ?>
      </select>
  </div>

  <div class="mb-3">
      <label for="autor" class="form-label">Autor</label>
      <select class="form-select" name="id_autor" id="id_autor">
        <?php
          foreach ($autores as $autor) {
            $selected =
              $autor['id'] == $livro['id_autor']?'selected':'';

            echo "<option $selected value='{$autor['id']}'>{$autor['nome']}</option>";
          }
         ?>
      </select>
  </div>

  <div class="mb-3">
      <label for="editora" class="form-label">Editora</label>
      <select class="form-select" name="id_editora" id="id_editora">
        <?php
          foreach ($editoras as $editora) {
            $selected =
              $editora['id'] == $livro['id_editora']?'selected':''; 

            echo "<option $selected value='{$editora['id']}'>{$editora['nome']}</option>";
          }
         ?>
      </select>
  </div>

  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
