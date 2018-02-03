<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecintoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('recinto', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('nombre');
                $table->boolean('activo');
               /* $table->integer('statu_id')->unsigned();            
            $table->foreign('statu_id')->references('id')->on('statu');*/
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
        Shema::dropIfExists('recinto');
    }
}
