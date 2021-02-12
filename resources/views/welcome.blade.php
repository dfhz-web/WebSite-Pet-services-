<x-app-layout>

    {{-- portada --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/girl-881537.jpg')}})">
      <section class=" bg-cover" style="background-image: url(https://cdn.pixabay.com/photo/2017/09/25/13/14/dog-2785077__340.jpg)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-40">
          <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-black font-bold text-4xl cursor-default">Find what you lovely friend needs...!</h1>
            <p class="text-black text-lg mt-2 mb-4 cursor-default">Here you will find any kind of service that you friend need, go ahead and find by yourself...</p>            

              <!-- component -->
              <!-- This is an example component seach moved to livewire jeje-->

              @livewire('search')
             
        
          </div>
        </div>
        
    </section>
    
    
    <section class='mt-24 text-center'>
        <h1 class="text-gray-600 text-center text-3xl mb-6 cursor-default">Content</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-11">
          
        <a href="{{route('posts.index')}}" class="cursor-pointer">
          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/blogg.jpg')}}" alt="">
            </figure>

            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">News</h1>
            </header>
            <p class="text-sm text-gray-500">Ldorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>
        </a>




        <a href="{{route('aboutus')}}" class="cursor-pointer">
          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/aboutus.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">About us</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>
        </a>

         <a href="{{route('suggestions.indexcreate')}}" class="cursor-pointer">
          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/contactus.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">Get contact</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>
        </a>


        <a href="{{route('suggestions.indexcreate')}}" class="cursor-pointer">
          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190__340.jpg" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">Premier</h1>
            </header>
            <p class="text-sm text-gray-500">Coming soon.......</p>
          </article>
        </a>



       </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
      <h1 class="text-center text-white text-3xl cursor-default">You have not idea how to start?.</h1>
      <p class="text-center text-white cursor-default">Go to the services and get start it! </p>
     <div class="flex justify-center mt-4">
      {{-- <a
      href="" class="cursor-pointer inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
      Brochure of modules
      </a> --}}


         <i class=" text-4xl animate-bounce w-6 h-6  fas fa-arrow-down"></i>
   
      </div>

    </section>

    <section class="my-24">
      <h1 class="text-center text-3xl text-white cursor-default">Services</h1>
      <p class="text-center text-gray-900 text-sm mb-6 cursor-default">Always approach of comfy</p>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        
      {{-- /////////// --}}

   
{{-- {{$module->id}} --}}



<article class="card flex flex-col">
    <img class="h-36 w-full object-cover object-center" src="https://cdn.pixabay.com/photo/2016/02/03/23/24/dog-1178365_960_720.jpg" alt="">
    
    
    <div class="card-body flex-1 flex flex-col">

          <h1 class="card-title cursor-default">
            Shower
          <h1>
            
          <div class="flex ">

            <p class="text-sm text-gray-500 mr-auto cursor-default">
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-horse"></i>
              <i class="fas fa-kiwi-bird"></i>
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-otter"></i>
              <i class="fas fa-feather"></i>
              <i class="fas fa-dragon"></i>
            </p>

           
           
          </div>

          {{-- @if ($module->price->value == 0)
          <p class="my-2 text-gray-700 font-bold">Free</p>
          @else
          <i class="fas fa-dollar-sign mt-3 font-bold  text-gray-700">{{$module->price->value}}</i>

              
          @endif
     --}}



          <a href=""
           class=" blok text-center w-full mt-5 inline-block px-6 py-2 text-xs font-medium leading-6 text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black">
            Get it!
        </a>

    </div>
  </article>


  <article class="card flex flex-col">
    <img class="h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/vet-with-dog-and-cat-puppy-and-kitten-at-doctor-picture-id1171733307?b=1&k=6&m=1171733307&s=170667a&w=0&h=5RwaHF01DO2t8zcEw6FBjS8l56s055h110rT5avGLCY=" alt="">
    
    
    <div class="card-body flex-1 flex flex-col">

          <h1 class="card-title cursor-default">
            Consultation
          <h1>
            
          <div class="flex ">

            <p class="text-sm text-gray-500 mr-auto cursor-default">
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-horse"></i>
              <i class="fas fa-kiwi-bird"></i>
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-otter"></i>
              <i class="fas fa-feather"></i>
              <i class="fas fa-dragon"></i>
            </p>

           
           
          </div>

          {{-- @if ($module->price->value == 0)
          <p class="my-2 text-gray-700 font-bold">Free</p>
          @else
          <i class="fas fa-dollar-sign mt-3 font-bold  text-gray-700">{{$module->price->value}}</i>

              
          @endif
     --}}



          <a href=""
           class=" blok text-center w-full mt-5 inline-block px-6 py-2 text-xs font-medium leading-6 text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black">
            Get it!
        </a>

    </div>
  </article>


  <article class="card flex flex-col">
    <img class="h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/female-groomer-haircut-pomeranian-dog-on-the-table-of-outdoor-process-picture-id1184851389?b=1&k=6&m=1184851389&s=170667a&w=0&h=qLMS4mNlmQ8Eq6oRaUlazjwBVfnu9GusAR0G3JMPeyU=" alt="">
    
    
    <div class="card-body flex-1 flex flex-col">

          <h1 class="card-title cursor-default">
            Hairdresser
          <h1>
            
          <div class="flex ">

            <p class="text-sm text-gray-500 mr-auto cursor-default">
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-horse"></i>
              <i class="fas fa-kiwi-bird"></i>
              <i class="fas fa-dog"></i>
              <i class="fas fa-cat"></i>
              <i class="fas fa-otter"></i>
              <i class="fas fa-feather"></i>
              <i class="fas fa-dragon"></i>
            </p>

           
           
          </div>

          {{-- @if ($module->price->value == 0)
          <p class="my-2 text-gray-700 font-bold">Free</p>
          @else
          <i class="fas fa-dollar-sign mt-3 font-bold  text-gray-700">{{$module->price->value}}</i>

              
          @endif
     --}}



          <a href=""
           class=" blok text-center w-full mt-5 inline-block px-6 py-2 text-xs font-medium leading-6 text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black">
            Get it!
        </a>

    </div>
  </article>




      {{-- ////////// --}}
        
        
        
        
        
        
        {{-- @foreach ($modules as $module)
        <x-module-card :module="$module"/>
            
        @endforeach --}}

      </div>

    </section>
    @livewire('mainfooter')


    


</x-app-layout>

