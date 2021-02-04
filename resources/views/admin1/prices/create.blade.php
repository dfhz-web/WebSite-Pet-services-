@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Create new one!</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route'=>'administrator.prices.store']) !!}

                 <div class="form-group">
                     {!! Form::label('name', 'Name: ') !!}
                     {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'asignment a price']) !!}
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                          
                      @enderror

                 </div>


                 <div class="form-group">
                      {!! Form::label('value', 'value: ') !!}
                      {!! Form::number('value', null, ['class'=>'form-control','placeholder'=>'enter value']) !!}
                      @error('value')
                      <span class="text-danger">{{$message}}</span>
                          
                      @enderror
 
                </div>
                 {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
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