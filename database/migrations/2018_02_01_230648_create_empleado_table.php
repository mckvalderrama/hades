<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('empleado', function(Blueprint $table)
       {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('sexo');
        $table->string('domicilio');
        $table->string('correo')->unique();
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
        Schema::dropIfExists('empleado');
    }
}
