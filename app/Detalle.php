<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $fillable = [
        'product_id', 'compra_id', 'precio_unitario'
    ];


    public function compras(){
        return $this->belongsToMany(Compra::class, 'detalle_id');//Mucho a muchos
    
    }

    public function productos(){
    	return $this->belongsToMany(Product::class);//Mucho a muchos
    }
  
  
}
