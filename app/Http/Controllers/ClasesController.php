<?php

namespace App\Http\Controllers;

use App\Models\clases;
use Illuminate\Http\Request;
//Controlador de la tabla clases
class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Funcion para traer todos los datos 
    public function index()
    {
        //Traemos todos los datos de clases y se lo asignamos a la variable $clases
        $clases = clases::all();
        //Retornamos el arreglo
        return $clases;
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
    //Funcion para crear un nuevo dato
    public function store(Request $request)
    {
        //Creamos una instancia de la clase (clases)
        $clases = new clases();
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo nombre
        $clases->nombre = $request->nombre;
        //Y el campo ID_Clase
        $clases->ID_Clase =$request-> ID_Clase;
        //Guardamos los datos
        $clases->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function show(clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function edit(clases $clases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    //Funcion para Actualizar un dato
    public function update(Request $request)
    {
        //Usamos el metodo findOrFail y como parametro capturamos el id utilizando el objeto request
        $clases = clases::findOrFail($request);
        $clases = new clases();
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo nombre
        $clases->nombre = $request->nombre;
        // Y en el campo ID_Clases
        $clases->ID_Clases = $request->ID_Clases;
        //Guardamos los datos 
        $clases->save();
        //Y devolvemos un objeto 
        return $clases;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    //Funcion para eliminar un dato
    public function destroy(Request $request)
    {
        //destroy es un metodo de la clase clases y como parametro toma el id 
        $clases = clases::destroy($request->id);
        //Devolvemos true si se ejecuto correctamente para manejar errores podemos usar un Try Catch
        return $clases;
    }
}
