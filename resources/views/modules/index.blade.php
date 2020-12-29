<x-app-layout>

    {{-- portada --}}
    <section class="bg-cover" style="background-image: url({{asset('img/modules/portadamodules.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
          <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-black font-bold text-4xl">Get comfy to choose what you need</h1>
            <p class="text-black text-lg mt-2 mb-4">Here you find what you need it!</p>
            

              <!-- component -->
              <!-- This is an example component -->
              {{-- i used livewire to complemet this view with the componente of livewire for search use in home --}}
              @livewire('search')
            
        
          </div>
        </div>
    </section>

    @livewire('module-index')

</x-app-layout>