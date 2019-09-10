<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialSupplier extends Model
{
    protected $table='material_supplier';

	protected $fillable=['material_id','supplier_id', 'cantidad', 'precio', 'medida'];
}
