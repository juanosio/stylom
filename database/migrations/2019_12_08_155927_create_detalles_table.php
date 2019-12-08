<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
        

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('compra_id');
            $table->integer('precio_unitario');


            //Relaciones 
            $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('compra_id')->references('id')->on('compras')
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
        Schema::dropIfExists('detalles');
    }
}
