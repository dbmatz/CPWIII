<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Autor;
use App\Models\Genero;
use App\Models\Editora;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titulo',
        'foto',
        'status',
        'descricao',
        'id_autor',
        'id_editora',
        'id_genero',
    ];

    public function autors(): belongsToMany
    {
        return $this->belongsToMany(Autor::class);
    }

    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class);
    }

    public function editora(): BelongsTo
    {
        return $this->belongsTo(Editora::class);
    }

    public function reviews(): HasMany
    {
        return $this->HasMany(Review::class);
    }
}
