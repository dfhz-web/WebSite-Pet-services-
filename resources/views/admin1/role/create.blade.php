@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Rolling create</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'administrator.roles.store']) !!}

               @include('admin1.role.divide.form')



                     
                     {!! Form::submit('Assignment of roles', ['class'=>'btn btn-success mt-3']) !!}
                
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop