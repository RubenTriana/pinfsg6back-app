<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\database\Eloquent\SoftDeletes;

class Alta extends Model

{
    use SoftDeletes;
    protected $table = 'altas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'mensaje'

    ];
}