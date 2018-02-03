<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('servicio', function(Blueprint $table)
     {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('folio')->unique();


        $table->integer('usuario_id')->unsigned();
        $table->foreign('usuario_id')->references('id')->on('usuario');       

        $table->integer('statu_id')->unsigned();
        $table->foreign('statu_id')->references('id')->on('statu');

        $table->integer('evento_recinto_id')->unsigned();
        $table->foreign('evento_recinto_id')->references('id')->on('evento_recinto');
      
        $table->integer('cliente_id')->usigned();
        $table->foreign('cliente_id')->references('id')->on('cliente_id');
       

        $table->integer('capilla_id')->unsigned();
        $table->foreign('capilla_id')->references('id')->on('capilla');
        

        
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
        Shema::dropIfExists('servicio');
    }
}
