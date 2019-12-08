|<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id');
        

            $table->unsignedBigInteger('user_id');
            $table->integer('referencia');
            $table->integer('total')->nullable();
            $table->enum('estado_de_compra',['En espera','Rechazada','Aprobada'])->nullable();;
            $table->string('banco_emisor')->nullable();

        
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
        Schema::dropIfExists('compras');
    }
}
