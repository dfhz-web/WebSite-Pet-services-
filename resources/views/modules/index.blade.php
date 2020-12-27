<x-app-layout>

    {{-- portada --}}
    <section class="bg-cover" style="background-image: url({{asset('img/modules/portadamodules.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
          <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-black font-bold text-4xl">Get comfy to choose what you need</h1>
            <p class="text-black text-lg mt-2 mb-4">Here you find what you need it!</p>
            

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

    @livewire('module-index')

</x-app-layout>