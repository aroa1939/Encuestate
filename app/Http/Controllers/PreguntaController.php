<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Pregunta;
//use App\Respuesta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $preguntas= Pregunta::all();
        return view('preguntas/index',['preguntas'=>$preguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $encuestas= Encuesta::all()->pluck('titulo','id');
        return view('preguntas/create',['encuestas'=>$encuestas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, ['tituloPregunta'=>'required|max:255','encuesta_id'=>'required|exists:encuestas,id']);
        $pregunta = new Pregunta($request->all());
        $pregunta ->save();
        flash('Pregunta creada correctamente');
        return redirect()->route('preguntas.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $id)
    {
        $pregunta = Pregunta::find($id);
        return view('preguntas.show')->with('pregunta', $pregunta);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pregunta=Pregunta::find($id);
        $encuestas=Encuesta::all()->pluck('titulo','id');
        return view('preguntas/edit',['pregunta'=>$pregunta,'encuestas'=>$encuestas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, ['tituloPregunta'=>'required|max:255','encuesta_id'=>'required|exists:encuestas,id']);
        $pregunta=Pregunta::find($id);
        $pregunta -> fill($request->all());
        $pregunta ->save();
        flash('Pregunta modificada correctamente');
        return redirect()->route('preguntas.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pregunta= Pregunta::find($id);
        $pregunta->delete();
        flash('Pregunta borrada correctamente');
        return redirect()->route('preguntas.index');
    }
}
