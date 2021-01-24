<div>
   
  <x-slot name="module">
    {{$module->slug}}
  </x-slot>

  <h1 class="text-2xl font-bold">Parts that need to be complete to get assistances</h1>
  <hr class="mt-3 mb-6">

  <div x-data="{open:false}" class="">
    <a x-on:click="open = !open" class="flex items-center cursor-pointer">
      <i class="fas fa-plus-circle text-2xl text-yellow-300 m-2"></i>
      Add new section
    </a>

    <article class="card" x-show="open">
      <div class="card-body bg-blue-100 text-black">


        <h1 class="text-xl font-bold mb-2">Add new section</h1>

        <div class="">
             <input wire:model="name" class="form-input w-full" placeholder="Write Section's name">
             @error('name')
             <span class="text-1xl text-yellow-300">{{$message}}</span>
                 
             @enderror
        </div>

        <div class="flex justify-end">

          <button wire:click="storeName" class="border border-indigo-500 text-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
           Add
          </button>
          <button x-on:click="open = false" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
            Cancel
          </button>
        </div>


      </div>


    </article>
  </div>
  



    @foreach ($module->sections as $item)
      <article class="card mb-4 mt-10">
        <div class="card-body bg-blue-100">


          @if ($section->id == $item->id)

            <form wire:submit.prevent="update">
               <input wire:model="section.name" class="form-input w-full" placeholder="Put a name of the section">

               @error('section.name')
               <span class="text-1xl text-yellow-400">{{$message}}</span>
                   
               @enderror
            </form>


          @else

          <header class="flex justify-between item-center">
            <h1 class="cursor-pointer"><strong>Section: </strong>{{$item->name}}</h1>
            <div class="">
              <i class="fas fa-pencil-alt mr-2 cursor-pointer text-yellow-400" wire:click="edit({{$item}})">Edit</i>
              <i wire:click="destroy({{$item}})"  class="fas fa-trash-alt cursor-pointer text-red-500">Delete</i>
            </div>
          </header>


          <div>

            @livewire('specially.modules-lesson', ['section' =>$item], key($item->id))

            
                 
          </div>
              
          @endif

         
          
      </div>



      </article>
      
  @endforeach 

  
</div>
