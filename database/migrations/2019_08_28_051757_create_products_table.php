<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->bigIncrements('id');
         
            $table->text('nombre');
            $table->unsignedBigInteger('category_id');
            $table->integer('cantidad');
            $table->integer('stock_min');
            $table->integer('precio');
            $table->integer('stock_max');
            $table->text('descripcion');
            $table->string('foto')->nullable();
            $table->enum('talla',['SP','S','M','L','XL','XXL']);
            $table->enum('genero',['FEMENINO','MASCULINO']);
            $table->enum('envio',['DOMESA','MRW','ZOOM','LIBERTYEXPRESS']);
            $table->enum('estado',['HABILITADO','INHABILITADO']);

            $table->foreign('category_id')->references('id')->on('categories');
    
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
        Schema::dropIfExists('products');
    }
}
