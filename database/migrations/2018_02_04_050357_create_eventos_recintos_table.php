<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosRecintosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_recintos', function(Blueprint $table)
       {
        
        $table->increments('id');
        $table->integer('eventos_id')->unsigned();            
        $table->foreign('eventos_id')->references('id')->on('eventos');
        $table->integer('recintos_id')->unsigned();            
        $table->foreign('recintos_id')->references('id')->on('recintos');
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
        Shema::dropIfExists('eventos_recintos');
    }
}
