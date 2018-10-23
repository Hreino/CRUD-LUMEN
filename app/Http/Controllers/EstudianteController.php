<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante as Estudiante;
//prueba para encriptar
use Illuminate\Support\Facades\Hash;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){}

    public function index()
    {
        $listadoEstudiantes = Estudiante::all();
        // $est1 = new Estudiante();
        // $est1->nombre="Hector2";
        // $est1->apellidos="Reinosa";
        // $est1->edad="26";
        // $est1->institucion="ABC";

        // $est1->save();
        // return view('estudiantes.index', ['estudiantes'=> $listadoEstudiantes]);        
        return response()->json($listadoEstudiantes);
    }

    

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {

        if($request-> isJson()){
            $estudiante= Estudiante::create([
                'nombre'  => $request['nombre'],
                'apellidos'  => $request['apellidos'],
                'edad'  => $request['edad'],
                'institucion'  => Hash::make($request['institucion'])
            ]);
            return response() -> json($estudiante, 201);
        }
        return response()->json(['error'=>'No autorizado']);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */


    public function cargar( $id)
    {
        $estudiante= Estudiante::find($id);
        return response()-> json($estudiante);
    }

    public function update(Request $request, $id)
    {        
        if($request-> isJson()){
            $estudiante= Estudiante::where('id', '=', $id);
            $estudiante->update([
                'nombre'  => $request['nombre'],
                'apellidos'  => $request['apellidos'],
                'edad'  => $request['edad'],
                'institucion'  => Hash::make($request['institucion'])
            ]);
            return response() -> json($estudiante, 201);
        }

        return response()-> json($estudiante);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        Estudiante::find($id)->delete();
        
        return response()->json("Registro Eliminado");
    
    }
}
