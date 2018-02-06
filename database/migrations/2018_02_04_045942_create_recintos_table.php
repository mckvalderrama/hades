<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecintosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recintos', function(Blueprint $table)
       {
        $table->increments('id');
        $table->string('nombre');
        $table->boolean('activo');
        $table->integer('status_id')->unsigned();            
        $table->foreign('status_id')->references('id')->on('status');
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
        Shema::dropIfExists('recintos');
    }
}
