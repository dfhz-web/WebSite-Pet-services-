<x-specially-layout>
  


    {{-- <form action="{{route('prueba.create')}}" method="POST">
      @csrf
     

         <label>
          userI: 
          <br>
             <input type="text" name="userId">
        </label>

          <br>

          <label>
            title: 
            <br>
               <input type="text" name="title">
          </label>
  
            <br>

            

            <label>
              body: 
              <br>
                 <input type="text" name="body">
            </label>
    
              <br> 

              <button class="cursor-pointer border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline" type="submit">Create</button>
    




        
    </form>   --}}

      






  {!! Form::open(['route' => 'prueba.create']) !!}
                  
  <div class="mb-3">
  {!! Form::label('userId', " userId:") !!}
  {!! Form::text('userId', null, ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('name')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>

<div class="mb-3">
  {!! Form::label('title', " title:") !!}
  {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('kind')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>

<div class="mb-3">
  {!! Form::label('body', "body:") !!}
  {!! Form::text('body', null, ['class' => 'form-input block w-full mt-1']) !!}

  {{-- @error('address')
  <strong class="text-yellow-400 text-bold">{{$message}}</strong>
  @enderror --}}

</div>



<div class="flex justify-center">
  {!! Form::submit('Create', ['class' => 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
</div>


{!! Form::close() !!}

</x-specially-layout>