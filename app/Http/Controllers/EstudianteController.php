<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante as Estudiante;


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

    public function addnew(){
        return view('estudiantes.new');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store($nombre, $apellidos, $edad, $institucion)
    {
        $estudiante = new Estudiante();

        $estudiante->nombre = $nombre;
        $estudiante->apellidos = $apellidos;
        $estudiante->edad = $edad;
        $estudiante->institucion = $institucion;

        // $estudiante->nombre=$request->input('nombre');
        // $estudiante->apellidos=$request->input('apellidos');
        // $estudiante->edad=$request->input('edad');
        // $estudiante->institucion=$request->input('institucion');

       if ($estudiante->save()) {
          return response()->json("registro guardado");
       } else {
           return response()->json("registro no guardado");
       }
        // echo(json_encode($estudiante));
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
