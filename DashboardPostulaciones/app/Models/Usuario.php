<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombres_rs',
        'dni',
        'ruc',
        'correo',
        'celular',
        'rol',
        'user',
        'password',
        'archivo_cv',
    ];

    use HasFactory;

}
