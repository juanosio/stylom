<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'nombre', 'medida', 'cantidad', 'supplier_id',
    ];

    protected $hidden = [
        'stock_min', 'stockmax',
    ];

    public function suppliers(){
        return $this->belongsTo(Supplier::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class); //Muchos a muchos
    }
}
