


<x-app-layout>

    <div class="min-h-screen bg-gradient-to-b from-pink-100 to-gray-400 flex justify-center items-center">
      
      <div class="bg-white rounded-lg">
         
          <div class="w-full border-t-8 border-pink-600 rounded-lg flex">
          


            <div class="card">
                <div class="card-body">
                  <a href="{{route('categories.index')}}"><i class="fas fa-hand-point-left">Main View</i></a>
                  <h1 class="text-bold text-1xl text-center">Edit tag</h1> 

                  {!! Form::model($tag, ['route' => ['tags.update',$tag],'method' => 'put']) !!}

                        <div class="">
                            {!! Form::label('name', '   Name: ') !!}
                            {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => "tag' name"]) !!}
                            
                            @error('name')
                            <span class="text-yellow-400">{{$message}}</span>
                            @enderror


                        </div>



                        <div class="mt-3">
                            {!! Form::label('slug', '   Slug: ') !!}
                            {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => "tags' slug",'readonly']) !!}
                            @error('slug')
                            <span class="text-yellow-400">{{$message}}</span>
                            @enderror

                    </div>


                    <div class="mt-5 flex ">
                     

                            <div class="">
                                {!! Form::label('color', 'Color: ') !!}
                                <br>
                                {!! Form::select('color', $colors, ['class' =>'form-input block w-full mt-1 rounded-md ']) !!}


                            </div>


 
                    

                       
                    </div>

               
                  

                    


                </div>

            </div> 




            






          </div>
      
          <div class="p-4 flex space-x-4">
            @if (session('info'))
            <!-- component -->
              <div  class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
                  <p>{{session('info')}}</p>
              </div>
            @endif
           
            {!! Form::submit('Update', ['class'=>'w-1/2 px-4 py-3 text-center text-pink-100 bg-pink-600 rounded-lg hover:bg-pink-700 hover:text-white font-bold text-sm']) !!}

          </div>
        </div>
      </div>


      {!! Form::close() !!}



    <x-slot name="tagg">
        <script>

                    document.getElementById("name").addEventListener('keyup', slugChange);

                    function slugChange(){
                        
                        name = document.getElementById("name").value;
                        document.getElementById("slug").value = slug(name);

                    }

                    function slug (str) {
                        var $slug = '';
                        var trimmed = str.trim(str);
                        $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                        replace(/-+/g, '-').
                        replace(/^-|-$/g, '');
                        return $slug.toLowerCase();
                    }

        

        </script>

    </x-slot>
</x-app-layout>

