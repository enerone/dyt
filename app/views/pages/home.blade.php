@extends('layouts.default')

@section('content')

	<div class="jumbotron">
		<h2>Sistema de Diagnóstico y tratamiento</h2>


        <p>Por favor introduzca sus credenciales para ingresar al sistema</p>


        <div class="row">
            <div class="col-md-6">
                {{ Form::open(['route'=>'login_path']) }}
                <div class="form-group">
                    {{ Form::label('email','Email:') }}
                    {{ Form::email('email', null, ['class'=>'form-control', 'required'=>'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password','Clave:') }}
                    {{ Form::password('password', ['class'=>'form-control', 'required'=>'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Ingresar al sistema', ['class'=>'btn btn-primary']) }}
                    {{ link_to('/password/remind', 'Blanqueo de clave') }}
                </div>
                {{ Form::close() }}
            </div>
        </div>



      </div>
@stop