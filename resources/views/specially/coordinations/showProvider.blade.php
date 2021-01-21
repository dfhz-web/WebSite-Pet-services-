<x-app-layout>
    <div class="container">
 
        <div class="grid grid-cols-1 lg:grid-cols-2 py-8">
          <div class="text-center">

                 <x-table>
                        {!! Form::open(['route' => 'coordinations.store']) !!}
                  
                        <div class="mb-3">
                        {!! Form::label('name', " Name:") !!}
                        {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1']) !!}

                        @error('name')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('kind', " kind:") !!}
                        {!! Form::text('kind', null, ['class' => 'form-input block w-full mt-1']) !!}

                        @error('kind')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('address', "Address:") !!}
                        {!! Form::text('address', null, ['class' => 'form-input block w-full mt-1']) !!}

                        @error('address')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('email', " Email:") !!}
                        {!! Form::text('email', null, ['class' => 'form-input block w-full mt-1']) !!}

                        
                        @error('email')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('phone', "Cellphone:") !!}
                        {!! Form::text('phone', null, ['class' => 'form-input block w-full mt-1']) !!}

                        @error('phone')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('price', "Price First Consultation:") !!}
                        {!! Form::text('price', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('price')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     
                     <div class="mb-3">
                        {!! Form::label('open_week', "Open_week:") !!}
                        {!! Form::text('open_week', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('open_week')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('break_week', "Break_week:") !!}
                        {!! Form::text('break_week', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('break_week')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('close_week', "Close_week:") !!}
                        {!! Form::text('close_week', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('close_week')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('open_weekend', "Open_weekend:") !!}
                        {!! Form::text('open_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('open_weekend')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     
                     <div class="mb-3">
                        {!! Form::label('break_weekend', "Break_weekend:") !!}
                        {!! Form::text('break_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('break_weekend')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('close_weekend', " Close_weekend:") !!}
                        {!! Form::text('close_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('close_weekend')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="mb-3">
                        {!! Form::label('note', " Note:") !!}
                        {!! Form::textarea('note', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('note')
                        <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                        @enderror

                     </div>

                     <div class="flex justify-center">
                        {!! Form::submit('Create', ['class' => 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
                  </div>

                 
                     {!! Form::close() !!}
                 
                
               </x-table>
           </div>
    
   

                    <x-table>

         
     
             @livewire('provider-search')
              
           </x-table>
         </div>
    
    
    
    
       </div>
 </div>

</x-app-layout>