<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function(Blueprint $table)
       {
        $table->increments('id');
        $table->string('sexo');
        $table->string('domicilio');
        $table->string('correo');
        $table->timestamps();
        $table->integer('personas_id')->unsigned();
        $table->foreign('personas_id')->references('id')->on('personas');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('empleados');
    }
}
