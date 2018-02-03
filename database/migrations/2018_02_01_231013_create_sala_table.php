<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cant_max');
            $table->text('descripcion');
            
            $table->integer('statu_id')->unsigned();            
            $table->foreign('statu_id')->references('id')->on('statu');

            $table->integer('inventario_sala_id')->unsigned();            
            $table->foreign('inventario_sala_id')->references('id')->on('inventario_sala');

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
        Shema::dropIfExists('sala');
    }
}
