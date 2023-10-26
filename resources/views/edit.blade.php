@vite('resources/css/app.css')
@extends('layouts.app')
@section('title','Trainers Edit')
@section('content')

{!!Form::model($trainer,['route'=>['trainers.update',$trainer], 'method'=>'PUT','files'=>true])!!}
      <div class="form-group">
         <div clas="form-group">
            {{Form::label ('name','Nombre')}}
            {{Form::text ('name',null,['class'=>'form-control'])}}
            {{Form::label ('apellido','apellido')}}
            {{Form::text ('apellido',null,['class'=>'form-control'])}}
        </div>
        <br>
        <div clas="form-group">
            {{Form::label ('avatar','avatar')}}
            {{Form::file ('avatar')}}
        </div>
        <br>
    </div>
    {{Form::submit('Actualizar',['class'=>'btn btn-primary'])}}
@endsection