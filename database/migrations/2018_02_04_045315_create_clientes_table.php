<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table)
        {
            
            $table->increments('id');
            
            $table->string('direccion');
            $table->integer('personas_id')->unsigned();
            $table->foreign('personas_id')->references('id')->on('personas');
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
         Shema::dropIfExists('clientes');
    }
}
