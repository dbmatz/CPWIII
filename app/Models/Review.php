<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'resumo',
        'descricao',
        'avaliacao',
        'id_livro',
    ];

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
