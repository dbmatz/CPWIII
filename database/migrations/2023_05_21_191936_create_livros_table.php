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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string('foto');
            $table->boolean('lido')->default(false);
            $table->foreignID('autor_id')->references('id')->on('autors')->onDelete('cascade');
            $table->foreignID('editora_id')->references('id')->on('editoras')->onDelete('cascade');
            $table->foreignID('genero_id')->references('id')->on('generos')->onDelete('cascade');
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
