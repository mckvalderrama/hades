<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = "inmuebles_salas";
    protected $connection = "capillas";
}
