
@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Edit-Role</h1>
@stop

@section('content')
   
<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route'=>['administrator.roles.update',$role], 'method' => 'put']) !!}

           @include('admin1.role.divide.form')



                 
                 {!! Form::submit('Update roles', ['class'=>'btn btn-success mt-3']) !!}
            
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