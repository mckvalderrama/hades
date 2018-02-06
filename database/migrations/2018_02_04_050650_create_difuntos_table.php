<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDifuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difuntos', function(Blueprint $table)
            {
                
                $table->increments('id');
                $table->date('fecha_nacimiento');
                $table->date('fecha_fallecio');

                $table->integer('personas_id')->unsigned();            
            $table->foreign('personas_id')->references('id')->on('personas');

            $table->integer('funerarias_id')->unsigned();            
            $table->foreign('funerarias_id')->references('id')->on('funerarias');

            $table->integer('servicios_id')->unsigned();            
            $table->foreign('servicios_id')->references('id')->on('servicios');
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
         Shema::dropIfExists('difuntos');
    }
}
