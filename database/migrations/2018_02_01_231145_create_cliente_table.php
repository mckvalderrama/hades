<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->string('direccion');
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
        Shema::dropIfExists('cliente');
    }
}
