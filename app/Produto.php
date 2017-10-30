<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'id',
        'descricao',
        'preco',
        'cor',
        'peso'
    ];

    protected $table = "produtos";
}
