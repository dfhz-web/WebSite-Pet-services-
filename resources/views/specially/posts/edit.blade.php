<x-app-layout>

    <div class="container">


        <h1 class="text-center text-bold text-xl p-5 m-2">Edit post!</h1>

        @if (session('info'))
        <div class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">
            <strong>{{session('info')}}</strong>
        </div>
            
        @endif


    <div class="card mt-4">
        <div class="card-body">
            {!! Form::model($post,['route' => ['shares.update',$post],'autocomplete' => 'off','files'=>true,'method'=>'put']) !!}
                    {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

                    @include('specially.posts.partials.form')


                  

                    {!! Form::submit('Update', ['class'=>'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}


            </div>
            {!! Form::close() !!}
        </div>
    </div>


    <x-slot name="jsedit">
        <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
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

                    ClassicEditor
                        .create( document.querySelector( '#extract' ) )
                        .catch( error => {
                            console.error( error );
                        } );


                        ClassicEditor
                        .create( document.querySelector( '#body' ) )
                        .catch( error => {
                            console.error( error );
                        } );

                        //Cambiar imagen
                        document.getElementById("file").addEventListener('change', cambiarImagen);

                        function cambiarImagen(event){
                            var file = event.target.files[0];

                            var reader = new FileReader();
                            reader.onload = (event) => {
                                document.getElementById("picture").setAttribute('src', event.target.result); 
                            };

                            reader.readAsDataURL(file);
                        }


        

        </script>


    </x-slot>



  </div>
</x-app-layout>