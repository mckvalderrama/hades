<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_evento extends Model
{
    protected $table = "categorias_eventos";
    protected $connection = "capillas";
}
