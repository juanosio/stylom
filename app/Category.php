<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = [    
        'nombre',      
];

public function products(){

     return $this->hasMany(Product::class);
}

}
