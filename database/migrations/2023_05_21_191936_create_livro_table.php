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
            $table->foreignID('genero_id')->references('id')->on('genero')->onDelete('cascade');
            $table->foreignID('autor_id')->references('id')->on('autor')->onDelete('cascade');
            $table->foreignID('editora_id')->references('id')->on('editora')->onDelete('cascade');
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
