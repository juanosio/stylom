<?php

namespace App;
use App\Supplier;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'nombre', 'stock_min', 'stock_max', 'medida', 'stock_actual', 
    ];

    
    public function suppliers(){
        return $this->belongsToMany(Supplier::class, 'material_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class); //Muchos a muchos
    }
}
