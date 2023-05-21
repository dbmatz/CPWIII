<h1>Cadastro de Autor</h1>
<form action="<?php echo APP; ?>autor/salvar" method="post">
  <div class="mb-3">
      <label for="id" class="form-label">ID</label>
      <input readonly type="text" class="form-control" id="id" value="<?php echo $autor['id']; ?>" name="id">
  </div>
  <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" value="<?php echo $autor['nome']; ?>" name="nome">
  <button class="btn btn-primary" type="submit" name="button">Salvar</button>
</form>
