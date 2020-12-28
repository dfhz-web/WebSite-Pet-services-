<x-app-layout>

    {{-- portada --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/girl-881537.jpg')}})"><section class="bg-cover" style="background-image: url({{asset('img/home/girl-881537.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
          <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-black font-bold text-4xl">Get acknowledgement what medical provider can be used by you!</h1>
            <p class="text-black text-lg mt-2 mb-4">Healthylife provides each detatils about in your location if you need a kind of assistance</p>
            

              <!-- component -->
              <!-- This is an example component -->
             <div class="pt-2 relative mx-auto text-gray-600">
             <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
               type="search" name="search" placeholder="Search">
             
               <button type="submit"  class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg absolute right-0 top-0 mt-2 ">
                Search
              </button>
             
          </div>
        
          </div>
        </div>
    </section>

    <section class='mt-24'>
        <h1 class="text-gray-600 text-center text-3xl mb-6">Content</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-11">

          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/blogg.jpg')}}" alt="">
            </figure>

            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">Blog</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>


          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/module.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">Modules</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>


          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/aboutus.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">About us</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>


          <article>
            <figure>
              <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/contactus.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
              <h1 class="text-center text-xl text-gray-700">Get contact</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi atquessssssssssss</p>
          </article>


       </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
      <h1 class="text-center text-white text-3xl">You have not idea how to start?.</h1>
      <p class="text-center text-white">Go to the modules and get started </p>
     <div class="flex justify-center mt-4">
      <a
      href="{{route('modules.index')}}" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
      Brochure of modules
      </a>
      </div>

    </section>

    <section class="my-24">
      <h1 class="text-center text-3xl text-gray-700">Latests modules</h1>
      <p class="text-center text-gray-900 text-sm mb-6">Always approach of comfy</p>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($modules as $module)
        <x-module-card :module="$module"/>
            
        @endforeach

      </div>

    </section>


    


</x-app-layout>

