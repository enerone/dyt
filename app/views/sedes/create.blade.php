@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Creación de sedes</h1>
        @include('layouts.partials.errors')
        {{ Form::open(['route'=>'createsedes_path']) }}
        <!-- nombre sede form input -->
        <div class="form-group">
            {{ Form::label('nombre_sede','Nombre de la Sede:') }}
            {{ Form::text('nombre_sede',null,['class'=>'form-control']) }}
        </div>

        <!-- provincia form input -->
        <div class="form-group">
            {{ Form::label('provincia','Provincia:') }}
            {{ Form::text('provincia',null,['class'=>'form-control']) }}
        </div>

        <!-- localidad form input -->
        <div class="form-group">
            {{ Form::label('localidad','Localidad:') }}
            {{ Form::text('localidad',null,['class'=>'form-control']) }}
        </div>
        <!-- responsable form input -->
        <div class="form-group">
            {{ Form::label('responsable_sede','Responsable:') }}
            {{ Form::text('responsable_sede',null,['class'=>'form-control']) }}
        </div>
        <!-- email responsable form input -->
        <div class="form-group">
            {{ Form::label('email_responsable_sede','Email Responsable:') }}
            {{ Form::text('email_responsable_sede',null,['class'=>'form-control']) }}
        </div>
        <!-- email responsable form input -->
        <div class="form-group">
            {{ Form::label('telefono_responsable_sede','Teléfono Responsable:') }}
            {{ Form::text('telefono_responsable_sede',null,['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop