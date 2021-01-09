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
