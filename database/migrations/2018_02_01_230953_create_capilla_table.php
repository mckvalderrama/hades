<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapillaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capilla', function(Blueprint $table)
        {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');

            $table->integer('sala_id')->unsigned();            
            $table->foreign('sala_id')->references('id')->on('sala');
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
        Schema::dropIfExists('capilla');
    }
}
