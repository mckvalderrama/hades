<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios_salas', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('codigo');
                $table->integer('cant_existencia');

                $table->integer('inmbuebles_salas_id')->unsigned();
                $table->foreign('inmbuebles_salas_id')->references('id')->on('inmuebles_salas');

                $table->integer('salas_id')->unsigned();
                $table->foreign('salas_id')->references('id')->on('salas');
                
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
        Shema::dropIfExists('inventarios_salas');
    }
}
