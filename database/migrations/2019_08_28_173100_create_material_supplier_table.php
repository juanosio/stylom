<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('material_id'); // Relación con materials
            $table->foreign('material_id')->references('id')->on('materials'); // clave foranea
            $table->unsignedBigInteger('supplier_id'); // Relación con suppliers
            $table->foreign('supplier_id')->references('id')->on('suppliers'); // clave foranea
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_supplier');
    }
}
