<x-app-layout>
    <section class="bg-gray-500 py-12 mb-10">
        <section class="container grid grid-cols-1 lg:grid-cols-2 gap-6 " >
            <div class="text-white">
                <h1 class="text-4xl">{{$module->title}}</h1>
                <h2 class="text-xl mb-3">{{$module->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-tag"></i>
                    Kind: {{$module->kind->name}}
                </p>
                <p class="mb-2"><i class="fab fa-accusoft"></i>
                   Category: {{$module->type->name}}
                </p>
                <p class="mb-2"><i class="far fa-star"></i>
                    Rate: {{$module->rating}}
                </p>
               
             </div>

           
            <figure>
                {{-- waiting until get acknowledgment to make propety this --}}
               

                <h1 class="font-bold text-3xl">
                    Description:
                </h1>
                <div class="text-gray-900 text-base">
                {{$module->description}}
                </div>

                 <img class="mt-5 h-40 w-full object-cover object-center" src="{{Storage::url($module->picture->url)}}" alt="">
             
            </figure>

        </section>

    </section>




        <div class="container grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-9 gap-y-9">
            <div>


                <section class="">
                  
                         
                    <div class="py-10 px-20 bg-cover rounded-full shadow-lg"  style="background-image: url({{asset('storage/another/take.jpg')}})">
                        {{-- <a href="{{route('modules.getting',$module)}}" class="py-2 sm:px-10 btn btn-danger btn-block">Get start it!</a> --}}
                        
                        @can('alreadyEnrolled',$module)
                                   
                           <a href="{{route('modules.status',$module)}}" class="py-2 sm:px-10 btn btn-danger btn-block" type="submit">Continue with request!</a>
                      
                             
                    
                        @else      
                

                           <form action="{{route('modules.getting',$module)}}" method="post">
                              @csrf
                               <button class="py-2 sm:px-10 btn btn-danger btn-block" type="submit">Get start it!</button>
                           </form>

                            
                        @endcan
                        
                       
                    </div>
                    

                </section>



               

                <section class="mb-8">
                    <br>
                    <br>
                    <h1 class="font-bold text-3xl">Requirements</h1>
                    <ul class="list-disc list-inside">
                        @foreach ($module->requirements as $requirement)
                            <li class="text-gray-700 text-base">{{$requirement->name}}</li>
                        @endforeach
                    </ul>
    
                </section>


                <aside class="hidden lg:block grid grid-cols-2 gap-x-10 gap-y-10 mt-10">
                    
                    @foreach ( $similars as $similar)
                  
                        
                        <article class="flex mb-6">
                            <img class=" h-32 w-40 object-cover object-center src="{{Storage::url($similar->picture->url)}}" alt="">
                            <div class="ml-3">
                                <h1>
                                    <a class="font-bold text-gray-500" href="">{{Str::limit($similar->title,40)}}</a>
                                    <p class="mt-2 text-sm"><i class="fas fa-star mr-2 text-yellow-400"></i>{{$similar->rating}}</p>

                                </h1>
                                
                                 <div class="flex">
                                 <a href="{{route('modules.show',$similar)}}" class="py-2 sm:px-10 btn btn-gray btn-block">Go!</a>
                                 </div>
                             </div>

                        </article>
                   
                    @endforeach
                </aside>

                
               
            </div>

            <div class="lg:col-span-2">
                <section class="card mb-10">
                    <div class="card-body">
                        <h1 class="font-bold text-2xl mb-2">Take in main</h1>

                        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-2">
                            @foreach ($module->goals as $goal)
                                <li class="text-gray-700 text-base"><i class="fas fa-bullseye text-red-400 mr-2"></i>..{{$goal->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </section>


                <section class="mb-12">

                  
                    <h1 class="font-bold text-3xl mb-2">process of assistance</h1>
                   
                    @foreach ($module->sections as $section)
                        <article class="mb-4 shadow"
                         @if ($loop->first)
                         x-data="{open:true}"
                           @else
                           x-data="{open:false}"
                         @endif>
                            
                        
                            <header class="bg-indigo-500 border border-red px-4 py-2 cursor-pointer bg-transparent-200" x-on:click="open = !open">
                                   <h1 class="font-bold text-lg text-orange-50">
                                   <i class="fas fa-angle-down mr-2 text-black"></i>
                                  {{$section->name}}</h1>
                            </header>



                            <div class="bg-white py-2 px-4" x-show="open" x-on:click.away="open = false">
                                <ul class="grid grid-cols-1 gap-2">
                                    @foreach ($section->lessons as $lesson)
                                        <li class="text-gray-900 text-base"><i class="fas fa-check text-sm"></i>
                                            {{$lesson->name}}
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
        
                        </article>
                    @endforeach
        
                 
                </section>


                
            </div>
           


            <div>

               


             
            </div>

        </div>
       

    
</x-app-layout>