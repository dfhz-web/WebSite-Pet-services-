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

        </div>


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




<div class="grid grid-cols-2 gap-8 m-5">

        <div class="">
            @isset ($post->image)
                  <img id="picture" class="rounded-full  object-cover bg-cover h-full w-full" src="{{Storage::url($post->image->url)}}" alt="">
               @else 
                           <img id="picture" class="rounded-full  object-cover bg-cover h-full w-full" src="https://cdn.pixabay.com/photo/2020/12/30/14/26/lion-5873637__340.jpg" alt="">


            @endisset





        </div>




        <div class="">

            <div class="">
                {!! Form::label('file', 'Image will take place in the post') !!}
                {!! Form::file('file', ['class'=>'form-input w-full','accept' => 'image/*']) !!}
                @error('file')
                <hr>
                <span class="text-yellow-400">{{$message}}</span>
                    
                @enderror
            </div>
        

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ipsam dolor iure repudiandae necessitatibus eligendi itaque impedit rem, consectetur expedita maxime inventore quae modi reprehenderit eum? Quae nihil voluptates dicta!</p>

        </div>
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