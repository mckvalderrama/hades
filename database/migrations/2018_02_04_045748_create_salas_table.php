<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cant_max');
            $table->text('descripcion');
            
            $table->integer('status_id')->unsigned();            
            $table->foreign('status_id')->references('id')->on('status');

            $table->integer('capillas_id')->unsigned();            
            $table->foreign('capillas_id')->references('id')->on('capillas');

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
         Shema::dropIfExists('salas');
    }
}
