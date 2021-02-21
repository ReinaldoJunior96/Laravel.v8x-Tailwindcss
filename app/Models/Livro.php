<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected   $table = 'tbl_livros';
    protected   $primaryKey = 'id';
    public      $fillable = ['nome_livro', 'tipo_livro', 'preco_livro'];
    public      $timestamps = false;


}
