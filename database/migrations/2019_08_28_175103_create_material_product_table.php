<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('material_id'); // Relación con materials
            $table->foreign('material_id')->references('id')->on('materials'); // clave foranea
            $table->unsignedBigInteger('product_id'); // Relación con products
            $table->foreign('product_id')->references('id')->on('products'); // clave foranea
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
        Schema::dropIfExists('material_product');
    }
}
