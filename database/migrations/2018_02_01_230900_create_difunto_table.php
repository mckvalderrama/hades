<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDifuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('difunto', function(Blueprint $table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->date('fecha_nacimiento');
                $table->date('fecha_fallecio');

                $table->integer('persona_id')->unsigned();            
            $table->foreign('persona_id')->references('id')->on('persona');

            $table->integer('funeraria_id')->unsigned();            
            $table->foreign('funeraria_id')->references('id')->on('funeraria');

            $table->integer('servicio_id')->unsigned();            
            $table->foreign('servicio_id')->references('id')->on('servicio');
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
        Shema::dropIfExists('difunto');
    }
}
