<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleSalaInventarioSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_sala_inventario_sala', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('inmueble_sala_id')->unsigned();            
            $table->foreign('inmueble_sala_id')->references('id')->on('inmueble_sala');
           
            $table->integer('inventario_sala_id')->unsigned();            
            $table->foreign('inventario_sala_id')->references('id')->on('inventario_sala');
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
        Shema::dropIfExists('inmueble_sala_inventario_sala');
    }
}
