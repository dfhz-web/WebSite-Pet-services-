<x-app-layout>

    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">

        <div class="">

                        <div class="card">
                            <div class="card-body">

                                {!! Form::open(['route' => 'categories.store']) !!}

                                     <div class="">
                                          {!! Form::label('name', '   Name: ') !!}
                                          {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'write  name for category']) !!}



                                     </div>


                                     <div class="mt-3">
                                        {!! Form::label('slug', '   Slug: ') !!}
                                        {!! Form::text('name', null, ['class' => 'form-input block w-full mt-1', 'placeholder' => 'write slug for category']) !!}


                                   </div>

                                   {!! Form::submit('Create', ['class'=>'border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline']) !!}

                                {!! Form::close() !!}

                                


                            </div>

                        </div>



        </div>


        <div class="">

        </div>

    </div>
    
</x-app-layout>