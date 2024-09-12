<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_hora_inicio',
        'fecha_hora_fin',
        'facultad',
        'ubicacion',
        'deporte',
        'organizador',
        'capacidad',
        'tipo_evento',
        'requiere_inscripcion',
        'estado',
        'etiquetas'
    ];
}
