<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Respuesta;
use App\Encuesta;

use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $respuestas= Respuesta::all();
        //all();
        return view('respuestas/index',['respuestas'=> $respuestas]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $preguntas= Pregunta::all()->pluck('tituloPregunta','id');
        return view('respuestas/create',['preguntas'=>$preguntas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // foreach($encuesta->preguntas as $pregunta)
      //  $id = $_POST["pregunta_id"];

        $this->validate($request, ['respuesta'=>'required|max:255']);
        $respuesta = $_POST["respuesta"];
      //  $respuesta = new Respuesta($request->all());
        $respuesta ->save();
        include("../abre_conexion.php");

        $_GRABAR_SQL = "INSERT INTO $respuesta (nombre,email,fecha, hora) VALUES ('$respuesta')";
        mysql_query($_GRABAR_SQL);
        include("../cierra_conexion.php");

        flash('Respuesta creada correctamente');
        return redirect()->route('respuestas.index');
        /*
        $this->validate($request, ['respuesta'=>'required|max:255','pregunta_id'=>'required|exists:preguntas,id']);
        $respuesta = new Respuesta($request->all());
        $respuesta ->save();
        flash('Respuesta creda correctamente');
        return redirect()->route('respuestas.index');*/

        //return view('respuestas/index',['respuestas'=>$respuesta]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // Devuelve la moneda seleccionada por id.
        $encuesta = Encuesta::find($id);
        return view('respuestas.show')->with('encuesta', $encuesta);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $respuesta= Respuesta::find($id);
        $preguntas=Pregunta::all()->pluck('tituloPregunta','id');
       // $pregunta = Preguntas::all();
        return view('respuestas/edit',['respuesta'=>$respuesta,'preguntas'=>$preguntas]);

        //return view('respuesta/edit',['respuesta'=>$respuesta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,['respuesta' => 'required|max:255','pregunta_id' => 'required|exists:preguntas,id']);
        $respuesta = Respuesta::find($id);
        $respuesta->fill($request->all());
        $respuesta->save();
        flash('Respuesta modificada correctamente');
        return redirect()->route('respuestas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $respuesta=Respuesta::find($id);
        $respuesta->delete();
        flash('Respuesta borrada correctamente');
        return redirect()->route('respuestas.index');
    }
}
