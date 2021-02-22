<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'idalumno';

    protected $fillable = [
        'nombre',
        'paterno',
        'materno'
    ];
}
