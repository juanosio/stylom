<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'cantidad', 'stock_min', 'stock_max', 'drescripcion', 'foto', 'talla', 'genero', 'envio',
    ];
}
