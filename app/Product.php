<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'cantidad', 'stock_min', 'stock_max', 'descripcion', 'foto', 'talla', 'genero', 'envio',
    ];


    public function materials(){
    	return $this->belongsToMany(Material::class);//Muchos a muchos
    }
}
