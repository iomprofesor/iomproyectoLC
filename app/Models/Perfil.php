<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Experiencia;

class Perfil extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'perfil';

    // Campos que se pueden asignar en masa (mass assignment)
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'linkedin',
    ];

    // Relación de uno a muchos con Experiencia
    public function experiencias()
    {
        return $this->hasMany(Experiencia::class, 'id_perfil');
    }
}
