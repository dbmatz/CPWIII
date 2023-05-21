<h1>Cadastro de Editora</h1>
<form action="<?php echo APP; ?>editora/salvar" method="post">
  <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input readonly type="text" class="form-control" id="id" value="<?php echo $editora['id']; ?>" name="id">
  </div>
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="<?php echo $editora['nome']; ?>" name="nome">
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
