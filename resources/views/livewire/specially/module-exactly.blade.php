<div>
   
  <x-slot name="module">
    {{$module->slug}}
  </x-slot>

  <h1 class="text-2xl font-bold">Parts that need to be complete to get assistances</h1>
  <hr class="mt-3 mb-6">



    @foreach ($module->sections as $item)
      <article class="card mb-4">
        <div class="card-body bg-blue-100">

          <header class="flex justify-between item-center">
            <h1 class="cursor-pointer"><strong>Section: </strong>{{$item->name}}</h1>
            <div class="">
              <i class="fas fa-pencil-alt mr-2 cursor-pointer text-yellow-400">Edit</i>
              <i class="fas fa-trash-alt cursor-pointer text-red-500">Delete</i>
            </div>
          </header>
          
      </div>



      </article>
      
  @endforeach 
</div>
