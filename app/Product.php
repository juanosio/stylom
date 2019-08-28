<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'cantidad','descripcion', 'foto', 'talla', 'genero', 'envio',
    ];

    protected $hidden = [
        'stock_min', 'stock_max',
    ];

    public function materials(){
        return $this->hasMany(Material::class); //Muchos a muchos
    }
}
