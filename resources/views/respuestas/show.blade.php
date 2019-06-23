@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Encuesta: {{ $encuesta->titulo }}</div>

                    <div class="panel-body">

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Pregunta</th>

                            </tr>

                            @foreach ($encuesta->preguntas as $pregunta)

                                <tr>
                                    <td>{{ $pregunta->tituloPregunta}}</td>
                                    <td>{{ $pregunta->id}}</td>


                                </tr>

                                <tr>
                                    <td>
                                        <Form action="respuestas.store">
                                            <p>Respuesta: <input type="number" name="repuesta"/></p>



                                        </Form>
                                    </td>

                                </tr>

                            @endforeach
                            <td>
                            {!! Form::open(['route' => ['respuestas.store',$pregunta->id], 'method' => 'post']) !!} <!-- no se si es id o pregunta_id!-->
                                {!! Form::submit('Enviar',['class'=>'btn-primary btn']) !!}
                                {!! Form::close() !!}
                            </td>
                            <!-- <button type=button" onclick= "alert ('Enviado')"> Enviar
                             </button> !-->



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection