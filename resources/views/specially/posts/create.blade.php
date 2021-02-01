<x-app-layout>
    <div class="container">


        <h1 class="text-center text-bold text-xl p-5 m-2">Create a new post!</h1>


    <div class="card ">
        <div class="card-body">
            {!! Form::open(['route' => 'shares.store','autocomplete' => 'off']) !!}
                    {!! Form::hidden('user_id', auth()->user()->id) !!}


                    <div class="mt-3"
                        {!! Form::label('name', '   Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'enter name of the post']) !!}
                        
                        @error('name')
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror


                </div>


                <div class="mt-3">
                    {!! Form::label('slug', '   Slug: ') !!}
                    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'enter slug of the post','readonly']) !!}
                    
                    @error('slug')
                    <span class="text-yellow-400">{{$message}}</span>
                    @enderror


                    <div class="mt-4">
                        {!! Form::label('category_id', 'Category: -> ',['class' => 'mr-4']) !!}
                        {!! Form::select('category_id', $categories,['class'=>'form-select block w-full mt-1']) !!}
                        @error('category_id')
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror
                    
                    </div>
                    <br>


                    <div class="mb-5">
                        <p class="text-bold">Tags: </p>
                        @foreach ($tags as $tag)
                        <label class="mr-2">
                            {!! Form::checkbox('tags[]', $tag->id,null,) !!}
                            {{$tag->name}}


                        </label>
                    
                        @endforeach
                       

                        @error('tags')
                        <hr>
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror


                    </div>

                    <div class="mb-4">
                        <p class="text-bold">Status: </p>
                        <label class="mr-3">
                            {!! Form::radio('status', 1, true) !!}
                            Eraser 
                        </label>

                        <label>
                            {!! Form::radio('status', 2) !!}
                            published
                        </label>
                       
                        @error('status')
                        <hr>
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror


                    </div>

                    <div class="mb-4">

                        {!! Form::label('extract', 'Extract: ') !!}
                        {!! Form::textarea('extract', null, ['class' => 'form-input block w-full mt-1']) !!}
                        @error('extract')
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror
                    
                    </div>

                    <div class="mb-4">

                        {!! Form::label('body', "Post's body: ") !!}
                        {!! Form::textarea('body', null, ['class' => 'form-input block w-full mt-1']) !!}
                         @error('body')
                        <span class="text-yellow-400">{{$message}}</span>
                        @enderror
                    </div>

                    {!! Form::submit('create', ['class'=>'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}


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


        

        </script>

    </x-slot>



  </div>
</x-app-layout>