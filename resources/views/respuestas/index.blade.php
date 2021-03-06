@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Respuestas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'respuestas.index', 'method' => 'get']) !!}
                        {!!   Form::submit('Mostrar respuesta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>respuesta</th>
                                <th>id</th>
                                <th>Pregunta</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($respuestas as $respuesta)


                                <tr>
                                    <td>{{ $respuesta->respuesta }}</td>
                                    <td>{{ $respuesta->id}}</td>
                                    <td>{{ $respuesta->pregunta->tituloPregunta}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['respuestas.edit',$respuesta->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Mostrar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['respuestas.destroy',$respuesta->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection