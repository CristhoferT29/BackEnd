<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

//Controlador de la tabla Horario
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Funcion para traer todos los datos
    public function index()
    {
        //Traemos todos los datos de horario y se lo asignamos a la variable $horario
        $horario = Horario::all();
        //Retornamos un arreglo
        return $horario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Funciom para Crear un nuevo dato
    public function store(Request $request)
    {
        //Creamos una nueva instancia de la clase (Horario)
        $horario = new Horario();
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo nombre
        $horario->nombre = $request->nombre;
        // Campo dia
        $horario->dia = $request->dia;
        // Campo hora inicio
        $horario->hora_inicio = $request->hora_inicio;
        // Campo hora fin
        $horario->hora_fin = $request->hora_fin;
        //Guardamos los datos
        $horario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Funcion para Actualizar un dato
    public function update(Request $request)
    {
        //Usamos el metodo findOrFail y como parametro capturamos el id utilizando el objeto request
        $horario = Horario::findOrFail($request);
        $horario = new Horario();
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo nombre
        $horario->nombre = $request->nombre;
        // Campo dia
        $horario->dia = $request->dia;
        // Campo hora inicio
        $horario->hora_inicio = $request->hora_inicio;
        // Campo hora fin
        $horario->hora_fin = $request->hora_fin;
        //Guardamos los datos
        $horario->save();
        // Y devolvemos un objeto
        return $horario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Funcion para eliminar un nuevo dato
    public function destroy(Request $request)
    {
        //destroy es un metodo de la clase Horario y como parametro toma el id 
        $horario = Horario::destroy($request->id);
        //Devolvemos true si se ejecuto correctamente para manejar error podemos usar un Try Catch
        return $horario;
    }
}
