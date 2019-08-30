<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nombre', 'rif', 'direccion', 'telefono','correo',
    ];

    public function materials(){
        return $this->belongsToMany(Material::class); //Muchos a muchos
    }
}
