<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nombrep', 'rif', 'direccion', 'telefono','correo'
    ];
}
