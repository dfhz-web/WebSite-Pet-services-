<div>
  {{-- Botones --}}
  <div class="bg-gray-200 py-4 mb-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
          <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-900 mr-4 focus:outline-none" wire:click="resetFilters">
             <i class="fas fa-compress-alt text-lg mr-2"></i>
              All of modules
          </button>

 

    <!-- Dropdown types-->
    <div class="relative" x-data="{ open:false }">
       <button x-on:click=" open = !open " class="bg-white shadow h-12 px-4 rounded-lg text-gray-900 mr-4 overflow-hidden focus:outline-none" >
        <i class="fas fa-thumbtack"></i>
        Category
        <i class="fas fa-angle-down text-sm ml-2"></i>
       </button>
      <!-- Dropdown Body -->
      <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away=" open = false ">   
            @foreach ($types as $type)
            <a wire:click="$set('type_id',{{$type->id}})" x-on:click="open = false" class=" cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">  
              {{$type->name}}
              </a> 
            @endforeach
      </div>
    <!-- // Dropdown Body -->
    </div>
    <!-- // Dropdown -->



    <!-- Dropdown  Kinds-->
    <div class="relative mr-4" x-data="{ open:false }">
        <button x-on:click=" open = !open " class="bg-white shadow h-12 px-4 rounded-lg text-gray-900 mr-4 overflow-hidden focus:outline-none" >
            <i class="fas fa-tags"></i>
          Kinds
         <i class="fas fa-angle-down text-sm ml-2"></i>
        </button>
       <!-- Dropdown Body -->
       <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away=" open = false ">   
         @foreach ($kinds as $kind)
         <a wire:click="$set('kind_id',{{$kind->id}})" x-on:click="open = false"  class=" cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">  
          {{$kind->name}}
          </a> 
             
         @endforeach
         
       </div>
     <!-- // Dropdown Body -->
     </div>
     <!-- // Dropdown -->

    </div>

  </div>
{{-- 
  <p>type_id: {{$type_id}}</p>
  <p>kind_id: {{$kind_id}}</p> --}}

  {{-- modules --}}
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
    @foreach ($modules as $module)
      <x-module-card :module="$module"/>
        
    @endforeach

  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">  
      {{$modules->links()}} 
  </div>


</div>
