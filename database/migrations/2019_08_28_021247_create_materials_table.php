<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');

             $table->unsignedBigInteger('supplier_id');

         
            $table->integer('cantidad');
            $table->enum('medida',['UNITARIO','m','cm','inch']);
            $table->text('nombre');
           
            $table->integer('stock_min')->nullable();
            $table->integer('stock_max')->nullable();

           
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
        Schema::dropIfExists('materials');
    }
}
