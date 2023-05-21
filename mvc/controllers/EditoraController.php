<?php
  class EditoraController extends Controller {
    function listar() {
      $model = new Editora();
      $editoras = $model->read();
      $this->view("listagemEditora",
        compact('editoras'));
    }

    function novo() {
      $editora = array();
      $editora['id'] = 0;
      $editora['nome'] = "";
      $this->view('frmEditora',
        compact('editora'));
    }

    function salvar() {
      $editora = array();
      $editora['id'] = $_POST['id'];
      $editora['nome'] = $_POST['nome'];
      $model = new Editora();
      if ($editora['id'] == 0) {
        $model->create($editora);
      } else {
        $model->update($editora);
      }
      $this->redirect('editora/listar');
    }

    function editar($id) {
      $model = new Editora();
      $editora = $model->getById($id);
      $this->view('frmEditora',
         compact('editora'));
    }

    function excluir($id) {
      $model = new Editora();
      $model->delete($id);
      $this->redirect('editora/listar');
    }
  }
 ?>
