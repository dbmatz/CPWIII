<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Livro;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'foto',
    ];  

    public function livros(): BelongsToMany
    {
        return $this->BelongsToMany(Livro::class);
    }
}
