<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialSupplier extends Model
{
    protected $table='material_supplier';
    protected $table2='materials';
    protected $table3='suppliers';
	protected $fillable=['material_id','supplier_id', 'cantidad', 'precio'];
}
