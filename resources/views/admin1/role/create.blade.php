@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Rolling create</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'administrator.roles.store']) !!}
                     <div class="form-group">
                         {!! Form::label('name', 'Name:') !!}
                         {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),'placeholder' => "put the role's name"]) !!}
                         
                         @error('name')
                         <span class="invalid-feedback">
                             <strong>{{$message}}</strong>

                         </span>
    
                         @enderror
                     
                     </div>
                     <br>
                     <strong>Eventually permission</strong><br><br>
                     @foreach ($permissions as $permission)
                           
                             <label class="mr mr-5">
                                 {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                 {{$permission->name}}

                             </label>
                            
                         
                     @endforeach
                     <br>

                     @error('permissions')
                     <span class="text-danger">
                         <strong>{{$message}}</strong>
                         <br>

                     </span>

                     @enderror


                     
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