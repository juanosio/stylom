<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'nombre', 'medida', 'cantidad', 
    ];

    protected $hidden = [
        'stock_min', 'stockmax',
    ];

    public function suppliers(){
        return $this->belongsToMany(Supplier::class); //Muchos a muchos
    }

    public function products(){
        return $this->belongsToMany(Product::class); //Muchos a muchos
    }
}
