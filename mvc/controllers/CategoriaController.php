<?php
  class CategoriaController extends Controller {
    function listar() {
      $model = new Categoria();
      $categorias = $model->read();
      $this->view("listagemCategoria",
        compact('categorias')
        );
    }

    function novo() {
      $categoria = array();
      $categoria['id'] = 0;
      $categoria['descricao'] = "";
      $this->view("frmCategoria",
        compact('categoria')
      );
    }

    function salvar() {
      $categoria = array();
      $categoria['id'] = $_POST['id'];
      $categoria['descricao'] = $_POST['descricao'];
      $model = new Categoria();
      if ($categoria['id'] == 0) {
        $model->create($categoria);
      } else {
        $model->update($categoria);
      }
      $this->redirect("categoria/listar");
    }

    function editar($id) {
      $model = new Categoria();
      $categoria = $model->getById($id);
      $this->view("frmCategoria",
        compact('categoria')
      );
    }

    function excluir($id) {
      $model = new Categoria();
      $model->delete($id);
      $this->redirect("categoria/listar");
    }
  }
 ?>
