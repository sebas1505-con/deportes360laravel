<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'UseNombre',
        'useDireccion',
        'fechaNacimiento',
        'useBarrio',
        'useTelefono',
        'useCorre',
        'rol',

    ];

    protected $hidden = [
        'password',
    ];
}