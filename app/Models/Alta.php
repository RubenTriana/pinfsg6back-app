<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\database\Eloquent\SoftDeletes;

class Alta extends Model

{
    use SoftDeletes;
    protected $table = 'provincias';
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje'

    ];
}
