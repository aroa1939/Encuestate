

 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar preguntas</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($pregunta, [ 'route' => ['preguntas.update',$pregunta->id], 'method'=>'PUT']) !!}


                        <div class="form-group">

                            {!!Form::label('tituloPregunta', 'Titulo de la pregunta') !!}
                            <br>
                            {!! Form::text('tituloPregunta', $pregunta->tituloPregunta, ['class' => 'form-control', 'required','autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('encuesta_id', 'Encuesta asociada') !!}
                            <br>
                            {!! Form::select('encuesta_id', $encuestas, $pregunta->encuesta_id, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection