<?php
   class LivroController extends Controller {
     function listar() {
       $model = new Livro();
       $livros = $model->read();
       $this->view('listagemlivro',
        compact('livros'));
     }

     function novo() {
       $livro = array();
       $livro['id'] = 0;
       $livro['titulo'] = "";
       $livro['quantidade'] = "";
       $livro['id_genero'] = "";
       $livro['id_autor'] = "";
       $livro['id_editora'] = "";

       $modelGenero = new Genero();
       $generos = $modelGenero->read();

       $modelAutor = new Autor();
       $autores = $modelAutor->read();

       $modelEditora = new Editora();
       $editoras = $modelEditora->read();

       $this->view('frmLivro', compact('livro', 'generos', 'autores', 'editoras'));
     }

     function salvar() {
       $livro = array();
       $livro['id'] = $_POST['id'];
       $livro['titulo'] = $_POST['titulo'];
       $livro['quantidade'] = $_POST['quantidade'];
       $livro['id_genero'] = $_POST['id_genero'];
       $livro['id_autor'] = $_POST['id_autor'];
       $livro['id_editora'] = $_POST['id_editora'];
       $model = new Livro();
       if ($livro['id'] == 0) {
         $model->create($livro);
       } else {
         $model->update($livro);
       }
       $this->redirect('livro/listar');
     }

     function editar($id) {
       $model = new Livro();
       $livro = $model->getById($id);

       $modelGenero = new Genero();
       $generos = $modelGenero->read();

       $modelAutor = new Autor();
       $autores = $modelAutor->read();

       $modelEditora = new Editora();
       $editoras = $modelEditora->read();

       $this->view('frmLivro', compact('livro', 'generos', 'autores', 'editoras'));
     }

     function excluir($id) {
       $model = new Livro();
       $model->delete($id);
       $this->redirect('livro/listar');
     }
   }

 ?>
