<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            

            $table->integer('categorias_eventos_id')->unsigned();            
            $table->foreign('categorias_eventos_id')->references('id')->on('categorias_eventos');
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
        Shema::dropIfExists('eventos');
    }
}
