@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Asignment-role-user</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="h5">Name: </h1>
            <p class="form-control">{{$user->name}}</p>
       
            @if (session('info'))
            <div class="alert alert-success" role="alert">
                <strong>{{session('info')}}</strong>
            </div>
               
            
            @endif
            
            <h1 class="h5">Roles assignmented</h1>

            {!! Form::model($user, ['route' => ['administrator.users.update',$user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <label class="mr-4">
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                    
                @endforeach
                <br>
               
                {!! Form::submit('Assignment role', ['class' =>'btn btn-primary mt-1']) !!}
            
            
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