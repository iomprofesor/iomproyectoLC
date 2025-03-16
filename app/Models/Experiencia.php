<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;

class Experiencia extends Model
{
    protected $table = 'experiencia';

    protected $fillable = [
        'id_perfil',
        'empresa',
        'cargo',
        'fecha_inicio',
        'fecha_fin',
    ];

    // Relación inversa (muchos a uno) con Perfil
    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }
}
