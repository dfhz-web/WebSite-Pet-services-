<x-app-layout>
  {!! Form::model($module, ['route' => ['updates.update',$module],'method' => 'put','files' => true]) !!}
  <div>
     <div class="container py-4 grid grid-cols-6">
         <aside class="col-start-2 col-span-4 text-center">
              
              <h1 class="font-bold text-lg mb-4">Edit module</h1>
                <div class="grid grid-cols-4">
                  <div class=""> <a class="leading-8 mb-2 border-b-4 border-blue-200 pl-2" href="">Module's information</a></div>
                  <div class="">  <a class="leading-8 mb-2 border-b-4 border-trasnparent pl-2" href="">Lessons</a></div>
                  <div class=""> <a class="leading-8 mb-2 border-b-4 border-trasparent pl-2" href="">Goals</a></div>
                  <div class=""> <a  class="leading-8 mb-2 border-b-4 border-trasparent pl-2" href="">Beneficiaries</a></div>
            </div>
         
     

         </aside>
    



         
         <div class="col-start-1 col-span-6  card mt-9">
          <div class="card-body text-gray-800">
             <div class="grid grid-cols-4 gap-5">
                  <div class="">
                  <h1 class="text-2xl font-bold">Module's information</h1>
                  </div>
                


                <div class=""></div>
                <div class="">
                  {!! Form::label('kind_id', 'Kind') !!}
                  {!! Form::select('kind_id',$kinds, null, ['class' => 'form-input block w-full mt-1']) !!}
               </div>
                <div class="">
                  {!! Form::label('price_id', 'Price') !!}
                    {!! Form::select('price_id',$prices, null, ['class' => 'form-input block w-full mt-1']) !!}
    
                </div>

             </div>
                  <hr class="mt-3 mb-4">
             
             
                 <div class=""></div>
                <div class="mb-3">
                     {!! Form::label('title', "Title's course") !!}
                     {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>


                <h1 class=" font-bold mt-5 mb-5">Image of the module</h1>
                <div class="grid grid-cols-2 gap-5">
                  <figure>

                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-30 w-full">
                          <img id="picture" class="h-20 w-50 rounded-full bg-cover " src={{Storage::url($module->picture->url)}} alt="">
                      </div>
                    </div>
              


                  </figure>
                  <div class="">
                   
                    {!! Form::file('file', ['class' => 'form-input w-full','id'=>'file']) !!}


                  </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                  {!! Form::label('slug', "slug' course") !!}
                  {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="mb-3">
                  {!! Form::label('subtitle', "Subtitle's course") !!}
                  {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="mb-3">
                  {!! Form::label('description', "Description's course") !!}
                  {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="flex justify-center">
                     {!! Form::submit('update', ['class'=> 'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!} 


                </div>

               

                
              

               
               {!! Form::close() !!}
            


          </div>

      </div>
   </div>
  </div>

  <x-slot name="Helperwithslugwithname">
     <script src="{{asset('js/specially/shape.js')}}">  
     </script>
  </x-slot>
</x-app-layout>