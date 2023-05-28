<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->integer('quantidade');
            $table->integer('id_genero')->unsigned();
            $table->foreign('id_genero')->references('id')->on('generos');
            $table->integer('id_autor')->unsigned();
            $table->foreign('id_autor')->references('id')->on('autors');
            $table->integer('id_editora')->unsigned();
            $table->foreign('id_editora')->references('id')->on('editoras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro');
    }
};
