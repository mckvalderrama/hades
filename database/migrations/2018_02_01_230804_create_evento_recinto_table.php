<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoRecintoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('evento_recinto', function(Blueprint $table)
       {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('recinto_id')->unsigned();            
        $table->foreign('recinto_id')->references('id')->on('recinto');


        $table->integer('evento_id')->unsigned();            
        $table->foreign('evento_id')->references('id')->on('evento');
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
        Shema::dropIfExists('evento_recinto');
    }
}
