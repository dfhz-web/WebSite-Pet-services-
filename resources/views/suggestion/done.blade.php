<x-app-layout>
  
    
    <div class=" container grid grid-cols-4 bg-cover" style="background-image: url({{asset('storage/another/touch.jpg')}})">
        <div class="col-span-3">
            {{-- <a href="{{route('suggestions.create',$suggestions)}}" class="btn btn-primary btn-block btn-primary:hover">Fill out request</a>
             --}}
             <div class="mt-40 text-center">

                <div class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
                    <p class="font-bold">Completed</p>
                    <p>Your request has been successfully completed, We will be in touch as soon as</p>
                  </div>


        </div>

        </div>
        <div class="">
            <section class="mb-12">

                  
                <h1 class="font-bold text-3xl mb-2">Possibles answeres</h1>
               
                @foreach ($suggestions as $suggestion)
                    <article class="mb-4 shadow"
                     @if ($loop->first)
                     x-data="{open:true}"
                       @else
                       x-data="{open:false}"
                     @endif>
                        
                    
                        <header class="bg-blue-100 border border-red px-4 py-2 cursor-pointer bg-transparent-200" x-on:click="open = !open">
                               <h1 class="font-bold text-lg text-black">
                               <i class="fas fa-angle-down mr-2 text-black"></i>
                               {{$suggestion->question}}</h1>
                        </header>
        
        
        
                        <div class="bg-white py-2 px-4" x-show="open" x-on:click.away="open = false">
                            <ul class="grid grid-cols-1 gap-2">
                               
                                    <li class="text-gray-900 text-base"><i class="fas fa-crosshairs"></i>
                                        {{$suggestion->answere}}
                                    </li>
                                
                            </ul>
        
                        </div>
        
                    </article>

                    {{-- {{$suggestions->links()}} --}}
                @endforeach
        
              
            </section>
           
        </div>
       
       
        
   
     </div>

    
    


</x-app-layout>