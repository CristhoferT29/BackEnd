<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Modelo que interactua con la tabla _clases de nuestra base de datos
class clases extends Model
{
    use HasFactory;
    //Hacemos referencia a la Tabla de nuestra base de datos 
    protected $table='_clases';
    //Usamos la propiedad $fillable para permitir la asignacion masiva de datos
    // ya que por defecto Eloquent esta protegido contra vulnerabilidades en masa
    protected $fillable = ['nombre', 'ID_Clase'];

}   
