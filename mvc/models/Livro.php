<?php
  class Livro extends Model {
    protected $tabela="livro";
    protected $query = "SELECT livro.*, genero.nome as genero_nome,
    autor.nome as autor_nome,
    editora.nome as editora_nome
    FROM livro
    JOIN genero ON genero.id = livro.id_genero
    JOIN autor ON autor.id = livro.id_autor
    join editora on editora.id = livro.id_editora
    ORDER BY livro.id, livro.titulo";
    protected $ordem="id, nome";
  }
 ?>
