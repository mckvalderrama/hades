<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('servicios', function(Blueprint $table)
       {

        $table->increments('id');
        $table->integer('folio');

        $table->integer('eventos_recintos_id')->unsigned();
        $table->foreign('eventos_recintos_id')->references('id')->on('eventos_recintos');

        $table->integer('usuarios_id')->unsigned();
        $table->foreign('usuarios_id')->references('id')->on('usuarios');       

        $table->integer('clientes_id')->unsigned();
        $table->foreign('clientes_id')->references('id')->on('clientes');
        

        $table->integer('status_id')->unsigned();
        $table->foreign('status_id')->references('id')->on('status');

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
        Shema::dropIfExists('servicios');
    }
}
