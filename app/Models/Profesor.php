<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Modelo que interactua con la tabla profesors de nuestra base de datos
class Profesor extends Model
{
    use HasFactory;
    //Tabla de nuestra base de datos a la que hacemos referencia
    protected $table='profesors';
    //Usamos la propiedad $fillable para permitir la asignacion masiva de datos
    // ya que por defecto Eloquent esta protegido contra vulnerabilidades en masa
    protected $fillable = ['Nombre', 'Asignacion', 'Horario'];
}

