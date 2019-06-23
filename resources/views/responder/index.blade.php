@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Encuestas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'encuestas.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear encuesta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>id</th>
                                <th colspan="3">Acciones</th>
                            </tr>

                            @foreach ($encuestas as $encuesta)


                                <tr>
                                    <td>{{ $encuesta->id }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['encuestas.edit',$encuesta->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['encuestas.destroy',$encuesta->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['respuestas.show',$encuesta->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Responder', ['class'=> 'btn btn-info'])!!}
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