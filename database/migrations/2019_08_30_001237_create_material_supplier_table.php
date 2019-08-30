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

            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('supplier_id');
            
            $table->integer('cantidad');
            $table->integer('precio');

            //Relaciones 
            $table->foreign('material_id')->references('id')->on('materials')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
