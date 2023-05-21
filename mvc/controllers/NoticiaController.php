<?php
   class NoticiaController extends Controller {
     function listar() {
       $model = new Noticia();
       $noticias = $model->read();
       $this->view('listagemNoticia',
        compact('noticias'));
     }

     function novo() {
       $noticia = array();
       $noticia['id'] = 0;
       $noticia['titulo'] = "";
       $noticia['texto'] = "";
       $noticia['categoria_id'] = "";
       $noticia['data'] = "";
       $noticia['autor'] = "";

       $modelCategoria = new Categoria();
       $categorias = $modelCategoria->read();

       $modelAutor = new Autor();
       $autores = $modelAutor->read();

       $this->view('frmNoticia', compact('noticia', 'categorias', 'autores'));
     }

     function salvar() {
       $noticia = array();
       $noticia['id'] = $_POST['id'];
       $noticia['titulo'] = $_POST['titulo'];
       $noticia['texto'] = $_POST['texto'];
       $noticia['categoria_id'] = $_POST['categoria_id'];
       $noticia['autor_id'] = $_POST['autor_id'];
       $noticia['data'] = $_POST['data'];
       $model = new Noticia();
       if ($noticia['id'] == 0) {
         $model->create($noticia);
       } else {
         $model->update($noticia);
       }
       $this->redirect('noticia/listar');
     }

     function editar($id) {
       $model = new Noticia();
       $noticia = $model->getById($id);

       $modelCategoria = new Categoria();
       $categorias = $modelCategoria->read();

       $modelAutor = new Autor();
       $autores = $modelAutor->read();

       $this->view('frmNoticia', compact('noticia', 'categorias', 'autores'));
     }

     function excluir($id) {
       $model = new Noticia();
       $model->delete($id);
       $this->redirect('noticia/listar');
     }
   }

 ?>
