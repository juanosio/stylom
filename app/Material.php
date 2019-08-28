<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'nombre', 'medida', 'cantidad', 'stock_min','stock_max'
    ];
}
