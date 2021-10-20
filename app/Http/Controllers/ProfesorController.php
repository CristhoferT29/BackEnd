<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
//Controlador de la tabla profesors
class ProfesorController extends Controller
{
    //Funcion para traer todos los datos
    public function index(){
    // Traemos todos los datos de Profesor y se los asignamos a la variable $Profesor
    $Profesores = Profesor::all();
    //Devolvemos un arreglo
    return $Profesores;
    }
    // Funcion para Crear un nuevo dato
    public function store(Request $request){
    //Creamos una instancia de la clase (Profesor)
    $Profesores = new Profesor();
    //Usamos el metodo request para guardar los datos del formulario
    //Y lo guardamos en el campo nombre
    $Profesores->Nombre = $request->Nombre;
    //Campo Asignacion
    $Profesores->Asignacion = $request->Asignacion;
    // Campo Horario
    $Profesores->Horario = $request->Horario;
    // Guardamos los datos
    $Profesores->save();
    }
    //Funcion para Actualizar un nuevo dato
    public function update(Request $request){
    //Usamos el metodo findOrFail y como parametro capturamos el id utilizando el objeto request
    $Profesores = Profesor::findOrFail($request->id);
    //Usamos el metodo request para guardar los datos del formulario
    //Y lo guardamos en el campo nombre
    $Profesores->Nombre = $request->Nombre;
    // Campo Asignacion
    $Profesores->Asignacion = $request->Asignacion;
    // Campo Horario
    $Profesores->Horario = $request->Horario;
    //Guardamos los datos
    $Profesores->save();
    //Devolvemos un objeto
    return $Profesores;
    }
    //Funcion para eliminar un dato
    public function destroy(Request $request){
        //destroy es un metodo de la clase Profesor y como parametro toma el id 
        $Profesores = Profesor::destroy($request->id);
        //Devolvemos true si se ejecuto correctamente para manejar error podemos usar un Try Catch
        return $Profesores;
    }
}

