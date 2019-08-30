<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialProduct extends Model
{
    protected $table='material_product';
	protected $fillable=['material_id','product_id', 'cantidad', 'medida'];
}
