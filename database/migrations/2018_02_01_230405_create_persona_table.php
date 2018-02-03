<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function(Blueprint $table)
        {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap');
            $table->string('am');
            $table->integer('directorio_id')->unsigned();            
            $table->foreign('directorio_id')->references('id')->on('directorio');

            $table->timestamps();
            Schema::disableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
