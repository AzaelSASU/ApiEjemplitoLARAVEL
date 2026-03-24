<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Materia extends Model
{
    protected $table = 'materias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'creditos',
        'carrera_id'
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
}