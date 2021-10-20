<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Horario
//Ruta con el metodo get para traer los datos llama al controller HorarioController y a su funcion Index
Route::get('/horario', 'App\Http\Controllers\HorarioController@index'); // mostrar todos los registros
//Ruta con el metodo post para crear un dato llama al controller HorarioController y a su funcion Store
Route::post('/horario/create', 'App\Http\Controllers\HorarioController@store'); // Crear un registro
//Ruta con el metodo put para actualizar un dato llama al controller HorarioController y a su funcion Update
Route::put('/horario/{id}/update', 'App\Http\Controllers\HorarioController@update'); // Actualizar un registro
//Ruta con el metodo get para eliminar un dato llama al controler HorarioController y a su funcion destroy
Route::get('/horario/{id}', 'App\Http\Controllers\HorarioController@destroy'); // Borrar un registro 

//Registro
//Ruta con el metodo get para traer los datos llama al controller UserRegisterController y a su funcion Index
Route::get('/usuarios', 'App\Http\Controllers\UserRegisterController@index'); // Mostrar todos los registros
//Ruta con el metodo post para crear un nuevo dato llama al controller UserRegisterController y a su funcion store
Route::post('/usuarios', 'App\Http\Controllers\UserRegisterController@store'); // Crear un registro
//Ruta con el metodo put para actualizar un dato llama al controller UserRegisterController y a su funcion Update
Route::put('/usuarios/{id}', 'App\Http\Controllers\UserRegisterController@update'); // Actualizar un registro
//Ruta con el metodo delete para eliminar un dato llama al controller UserRegisterController y a su funcion destroy
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UserRegisterController@destroy'); // Elimina un registro

//Administrador
//Ruta con el metodo get para obtener los datos llama al controller ProfesorController y a su funcion Index
Route::get('profesor', 'App\Http\Controllers\ProfesorController@index'); //mostrar todos los registros
//Ruta con el metodo post para crear un nuevo dato llama al controller ProfesorController y a su funcion Store
Route::post('/profesor', 'App\Http\Controllers\ProfesorController@store'); //crear un registro
//Ruta con el metodo put para actualizar un dato llama al controller ProfesorController y a su funcion Update
Route::put('/profesor/{id}', 'App\Http\Controllers\ProfesorController@update'); //actualizar un registro
//Ruta con el metodo delete para eliminar un dato llama al controller ProfesorController y a su funcion Destroy
Route::delete('/profesor/{id}', 'App\Http\Controllers\ProfesorController@destroy'); //actualizar un registro

//Apartar Clases
//Ruta con el metodo get para obtener los datos llama al controller ClasesController y a su funcion Index
Route::get('/apartar', 'App\Http\Controllers\ClasesController@index');//Mostrar registro
//Ruta con el metodo post para crear un dato llama al controller ClasesController y a su funcion Store
Route::post('/apartar/create', 'App\Http\Controllers\ClasesController@store');//Crear registro
//Ruta con el metodo put para actualizar un dato llama al controller ClasesController y a su funcion Update
Route::put('/apartar/{id}/update', 'App\Http\Controllers\ClasesController@update');//Actualizar registro
//Ruta con el metodo delete para eliminar un dato llama al controller ClasesController y a su funcion Destroy
Route::delete('/apartar/{id}', 'App\Http\Controllers\ClasesController@destroy');//Borrar registro