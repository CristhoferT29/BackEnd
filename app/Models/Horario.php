<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Modelo que interactua con la tabla horario de nuestra base de datos
class Horario extends Model
{
    use HasFactory;
    //Tabla de nuestra base de datos a la que hacemos referencia
    protected $table='horario';
    //Usamos la propiedad $fillable para permitir la asignacion masiva de datos
    // ya que por defecto Eloquent esta protegido contra vulnerabilidades en masa
    protected $fillable = ['nombre', 'dia', 'hora_inicio', 'hora_fin'];
}
