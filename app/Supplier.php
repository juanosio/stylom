<?php

namespace App;
use App\Material;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nombre', 'rif', 'direccion', 'telefono','correo',
    ];

    public function materials(){
        return $this->belongsToMany(Material::class, 'supplier_id'); //Muchos a muchos
    }
}
