<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'autor_id', 'preco', 'quantidade'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
