<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//Controlador de la tabla users
class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Funcion para traer todos los datos
    public function index()
    {
        //Traemos todos los datos de User y los asignamos a la variable $usuarios
        $usuarios = User::all();
        //Retornamos el arreglo
        return $usuarios;
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
    //Funcion para Crear un nuevo Dato
    public function store(Request $request)
    {
         //Creamos una instancia de la clase (User)
        $usuario = new User();
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo name
        $usuario->name = $request->name;
        //Campo apellido
        $usuario->apellido = $request->apellido;
        // Campo email
        $usuario->email = $request->email;
        // Campo password
        $usuario->password = $request->password;
        //Y el campo rol
        $usuario->rol = $request->rol;
        // Guardamos los datos
        $usuario->save();
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
        $usuario = User::findOrFail($request->id);
        //Usamos el metodo request para guardar los datos del formulario
        //Y lo guardamos en el campo name
        $usuario->name = $request->name;
        // Campo Apellido
        $usuario->apellido = $request->apellido;
        // Campo Email
        $usuario->email = $request->email;
        // Campo password
        $usuario->password = $request->password;
        // Y el campo rol
        $usuario->rol = $request->rol;
        // Guardamos los datos
        $usuario->save();
        // Y devolvemos un objeto
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Funcion para Eliminar un dato
    public function destroy($id)
    {
        //destroy es un metodo de la clase User y como parametro toma el id 
        $usuario = User::find($id);
        $usuario->delete();
        //Devolvemos true si se ejecuto correctamente para manejar errores podemos usar un Try Catch
        return $usuario;
    }
}
