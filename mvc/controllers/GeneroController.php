<?php
  class GeneroController extends Controller {
    function listar() {
      $model = new Genero();
      $generos = $model->read();
      $this->view("listagemGenero",
        compact('generos')
        );
    }

    function novo() {
      $genero = array();
      $genero['id'] = 0;
      $genero['nome'] = "";
      $this->view("frmGenero",
        compact('genero')
      );
    }

    function salvar() {
      $genero = array();
      $genero['id'] = $_POST['id'];
      $genero['nome'] = $_POST['nome'];
      $model = new Genero();
      if ($genero['id'] == 0) {
        $model->create($genero);
      } else {
        $model->update($genero);
      }
      $this->redirect("genero/listar");
    }

    function editar($id) {
      $model = new Genero();
      $genero = $model->getById($id);
      $this->view("frmGenero",
        compact('genero')
      );
    }

    function excluir($id) {
      $model = new Genero();
      $model->delete($id);
      $this->redirect("genero/listar");
    }
  }
 ?>
