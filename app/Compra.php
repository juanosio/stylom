<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'user_id', 'referencia', 'totalC', 'estado_de_compra', 'banco_emisor'
    ];



    public function detalles(){
    	return $this->hasMany(Detalle::class, 'compra_id');//Mucho a muchos
    }

    public function productos(){
    	return $this->hasMany(Product::class);//Mucho a muchos
    }

    public function users(){
        return $this->hasMany(User::class);//Mucho a muchos
    }

    public function banks(){
        return $this->belongsTo(Bank::class);//Mucho a muchos
    }
}
