<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $encuestas= Encuesta::all();
        return view('encuestas/index',['encuestas'=>$encuestas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$encuestas=Encuesta::all()->pluck('titulo','id');

        return view('encuestas/create');
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
        //hace el save
        //dd($request); //imprime lo que quieras, y para la ejecucion
        $this->validate($request, [
            'titulo' => 'required|max:252'

        ]);


        $encuesta = new Encuesta($request->all());
        $encuesta->save();
        flash('Encuesta creada correctamente');
        $encuestas= Encuesta::all();
        return view('encuestas/index',['encuestas'=>$encuestas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Encuesta $id)
    {
        $encuesta = Encuesta::find($id);
        return View::make('respuestas.show')->with('encuesta', $encuesta);
        //return view('respuestas.show')->with('encuesta', $encuesta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $encuesta= Encuesta::find($id);
        //$pregunta = Preguntas::all();
        return view('encuestas/edit',['encuesta'=>$encuesta]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'titulo' => 'required|max:252'
            //'id' => 'required|exists:encuestas,id',


        ]);
        $encuesta = Encuesta::find($id);
        $encuesta->fill($request->all());
        $encuesta->save();
        flash('Encuesta modificada correctamente');
        return redirect()->route('encuestas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $encuesta= Encuesta::find($id);
        $encuesta->delete();
        flash('Encuesta borrada correctamente');
        return redirect()->route('encuestas.index');
    }
}
