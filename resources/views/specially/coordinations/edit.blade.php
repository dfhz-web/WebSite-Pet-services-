
  <x-app-layout>
    <div>
       <div class="container py-4 grid grid-cols-6">
           <aside class="col-start-2 col-span-4 text-center">
                
                <h1 class="font-bold text-lg mb-4">Update provider information</h1>
                  <div class="grid grid-cols-3">
                    <div class=""> 
                          <a class="leading-8 mb-2 pl-2" href="{{route('providers.checkProvider',$provider)}}">

                            <button
                            type="button"
                            class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Back
                            </button>
                          
                          </a>
                    </div>

                    <div class="">  
                      <a class="leading-8 mb-2 pl-2" href="">
                        <button
                        type="button"
                        class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">
                        Ready-click here!...
                        </button>
                        
                      </a>
                    </div>


                  <div class=""> <a class="leading-8 mb-2 pl-2" href="">
                    <button type="button" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                      See more notes about this!..
                    </button>
                      
                    </a>
                </div>
                   
              </div>
           
       
  
           </aside>
      
  
  
  
  
        <div class="col-start-1 col-span-6  card mt-9">
            <div class="card-body text-gray-800">
                <h1 class="text-2xl font-bold">Update provider!..</h1>
               
                <hr class="mt-3 mb-4">
               
               
                 {!! Form::model($provider, ['route' => ['updates.update',$provider],'method' => 'put']) !!}
                   
                  <div class="mb-3">
                       {!! Form::label('name', "Provider's name") !!}
                       {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1']) !!}
  
                  </div>

                  <div class="mb-3">
                    {!! Form::label('kind', "Provider's kind") !!}
                    {!! Form::text('kind', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>


                  
                  <div class="mb-3">
                    {!! Form::label('address', "Provider's address") !!}
                    {!! Form::text('address', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>


                  <div class="mb-3">
                    {!! Form::label('email', "Provider's email") !!}
                    {!! Form::text('email', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('phone', "Provider's cellphone") !!}
                    {!! Form::text('phone', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('price', "Provider's price") !!}
                    {!! Form::text('price', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('open_week', "Provider's schedule open week") !!}
                    {!! Form::text('open_week', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('break_week', "Provider's schedule break week") !!}
                    {!! Form::text('break_week', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('close_week', "Provider's schedule close week") !!}
                    {!! Form::text('close_week', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('open_weekend', "Provider's schedule open weekend") !!}
                    {!! Form::text('open_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>


                  
                  <div class="mb-3">
                    {!! Form::label('break_weekend', "Provider's schedule break weekend") !!}
                    {!! Form::text('break_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('close_weekend', "Provider's schedule close weekend") !!}
                    {!! Form::text('close_weekend', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>

                  <div class="mb-3">
                    {!! Form::label('note', "Provider's notes") !!}
                    {!! Form::textarea('note', null, ['class' => 'form-input block w-full mt-1']) !!}

                  </div>
  
  
  
  
  
                 
  
                  
  
  
                 
                 {!! Form::close() !!}
              
  
  
            </div>
  
        </div>
     </div>
    </div>
  

  </x-app-layout>
