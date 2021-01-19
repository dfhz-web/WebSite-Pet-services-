<x-app-layout>
    <div class="container">
 
        <div class="grid grid-cols-1 lg:grid-cols-2 py-8">
        <div class="text-center">

         {{-- lkdsjfklsda --}}
        <x-table>
      {!! Form::open(['route' => 'coordinations.store']) !!}
        
         <div class="mb-3">
            {!! Form::label('name', " Name:") !!}
            {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('kind', " kind:") !!}
            {!! Form::text('kind', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('address', "Address:") !!}
            {!! Form::text('address', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('email', " Email:") !!}
            {!! Form::text('email', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('phone', "Cellphone:") !!}
            {!! Form::text('phone', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('price', "Price First Consultation:") !!}
            {!! Form::text('price', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         
         <div class="mb-3">
            {!! Form::label('open_week', "Open_week:") !!}
            {!! Form::text('open_week', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('break_week', "Break_week:") !!}
            {!! Form::text('break_week', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('close_week', "Close_week:") !!}
            {!! Form::text('close_week', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('open_weekend', "Open_weekend:") !!}
            {!! Form::text('open_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         
         <div class="mb-3">
            {!! Form::label('break_weekend', "Break_weekend:") !!}
            {!! Form::text('break_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('close_weekend', " Close_weekend:") !!}
            {!! Form::text('close_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="mb-3">
            {!! Form::label('note', " Note:") !!}
            {!! Form::textarea('note', null, ['class' => 'form-input block w-full mt-1']) !!}

         </div>

         <div class="flex justify-center">
            {!! Form::submit('Create', ['class' => 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}
        </div>
                
      
         
    
 
           
    
            
    
    
           
    
            
    
          
        </x-table>



        {{-- fdasfads --}}
        </div>
    
        <div>
          <x-table>
            <div class="container pb-1 udm
            t-10">

            <x-table>

               <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                           Currently case:
                        </h3>
               </div>

                    <div class="border-t border-gray-200">
                      <dl>
                                 <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                     Symptoms: 
                                    </dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                       {{$assistance->symptoms}}
                                       </dd>
                                 </div>
                         <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                               Address
                             </dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                              {{$assistance->address}}
                             </dd>
                         </div>

                 
                  </dl>
                 </div>
          
           
           
    

            </x-table>

         </div>
    
             @livewire('provider-search')
              
          </x-table>
       </div>
    
    
    
    
       </div>
    
    
    
    
    </div>

</x-app-layout>