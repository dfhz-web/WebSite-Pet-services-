@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Edit!</h1>
@stop

@section('content')

@if (session('info'))
  <div class="alert alert-success">
      {{session('info')}}

  </div>
    
@endif
    <div class="card">
        <div class="card-body">

            {!! Form::model($price, ['route'=>['administrator.prices.update',$price],'method'=>'put']) !!}

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
                 {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
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