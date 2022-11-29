<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{

    protected $table = 'testimonios';
     
    protected $fillable = [
        'descripcion',
        'satisfacion',
        'usuario_id',
    ];
    public $timestamps = false;
}
