<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('usuario', function(Blueprint $table)
            {

                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('tipo');
                $table->string('usuario')->unique();
                $table->string('contrasena')->unique();

                $table->integer('persona_id')->unsigned();
                $table->foreign('persona_id')->references('id')->on('persona');
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
        Shema::dropIfExists('usuario');
    }
}
