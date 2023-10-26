@vite('resources/css/app.css')

@section('title','Trainers Create')
@section('content')
@extends ('layouts.app')
{!!Form::open (['route'=>'trainers.store', 'method'=>'POST', 'files'=>'true'])!!}
@include('form')
        <br>
        {{Form::submit('guardar',['class'=>'btn btn-primary'])}}
        {!!Form::close()!!}
@endsection