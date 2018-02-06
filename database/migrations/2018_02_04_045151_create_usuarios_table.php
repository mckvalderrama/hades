<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table)
            {

                
                $table->increments('id');
                $table->integer('tipo');
                $table->string('usuario');
                $table->string('contrasena');
                $table->timestamps();
                /*$table->integer('personas_id')->unsigned();
                $table->foreign('personas_id')->references('id')->on('personas');*/
                

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::dropIfExists('usuarios');
    }
}
