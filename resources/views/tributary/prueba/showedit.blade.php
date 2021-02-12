<x-specially-layout>

    {{-- {{$result['title']}} --}}
    <h1 class="text-center">Prueba-update</h1>



    {!! Form::open(['route' => ['prueba.update',$item],'method'=>'put']) !!}
                  
  <div class="mb-3">
  {!! Form::label('userId', " userId:") !!}
  {!! Form::text('userId', $result['userId'], ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('name')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>

<div class="mb-3">
  {!! Form::label('title', " title:") !!}
  {!! Form::text('title',$result['title'], ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('kind')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>

<div class="mb-3">
  {!! Form::label('body', "body:") !!}
  {!! Form::text('body', $result['body'], ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('address')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>



<div class="flex justify-center">
  {!! Form::submit('Update', ['class' => 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
</div>


{!! Form::close() !!}
</x-specially-layout>