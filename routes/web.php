<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/estudiantes', function(){
    return "Hola mundo";
});
// Route::middleware('auth:api')->get('/user', function(Request $request){
//     return $request->user();
// });

// Route::resource('estudiantes', 'EstudianteController');
$router ->get('/prueba', ['uses' => 'EstudianteController@index']);
$router ->post('/prueba/{nombre}/{apellidos}/{edad}/{institucion}', ['uses' => 'EstudianteController@store']);

// $router ->post('/prueba/{nombre}/{apellidos}/{edad}/{institucion}', ['uses' => 'EstudianteController@store']);



// $router ->get('/nuevo', ['as'=> 'nuevo.estudiante', 'uses' => 'EstudianteController@addnew']);
