<x-app-layout>
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
        <div class="">
          <br>
          <br>

         

            <div class="card">
                <div class="card-body">

                    {!! Form::model($category, ['route' => ['categories.update',$category],'method' => 'put']) !!}

                        <div class="">
                            {!! Form::label('name', '   Name: ') !!}
                            {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'write  name for category']) !!}
                            
                            @error('name')
                            <span class="text-yellow-400">{{$message}}</span>
                            @enderror


                        </div>


                        <div class="mt-3">
                            {!! Form::label('slug', '   Slug: ') !!}
                            {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'write slug for category','readonly']) !!}
                            @error('slug')
                            <span class="text-yellow-400">{{$message}}</span>
                            @enderror

                    </div>

                    {!! Form::submit('Update', ['class'=>'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}

                    {!! Form::close() !!}

                    


                </div>

            </div> 






        </div>

        <div class="">


              <!-- component -->
              <div class="bg-white overflow-hidden border-b-4 border-blue-500 w-full">
                <img src="https://cdn.pixabay.com/photo/2020/05/30/10/01/update-5238354__340.jpg" alt="People" class="w-full object-cover h-32 sm:h-48 md:h-64">
                <div class="p-4 md:p-6">
                <p class="text-blue-500 font-semibold text-xs mb-1 leading-none">@improve</p>
                <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal">Update category</h3>
                <div class="text-sm flex items-center">
                    <svg class="opacity-75 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12" height="12" viewBox="0 0 97.16 97.16" style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                    <path d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"/>
                    <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"/>
                    </svg>
                    @if (session('info'))
                    <!-- component -->
                      <div  class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
                          <p>{{session('info')}}</p>
                      </div>
                      @else
                      <p class="leading-none">Do it!</p>
                        
                    @endif
                    
                </div>
                </div>
            </div>



        </div>
    </div>



                          



        <x-slot name="jsedit">
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