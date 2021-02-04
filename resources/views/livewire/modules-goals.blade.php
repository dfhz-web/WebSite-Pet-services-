<section>
 
    
    <h1 class="text-2xl font-bold">Notes for beneficiary before start the assistance</h1>
    <hr class="mt-2 mb-6">
 
    @foreach ($module->goals as $item)
       <article class="card mb-5">
           <div class="card-body bg-blue-100">

            @if ($goal->id == $item->id)

              <form wire:submit.prevent="update">

                <input wire:model="goal.name" class="form-input block w-full mt-1">

                @error('goal.name')
                   <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                @enderror


              </form>
                
            @else

                        <header class="flex justify-between">
                            <h1>{{$item->name}}</h1>

                            <div class="">

                                <i wire:click="edit({{$item}})" class="fas fa-edit cursor-pointer text-yellow-400"></i>
                                <i wire:click="destroy({{$item}})" class="fas fa-trash cursor-pointer text-red-400 ml-2"></i>

                            </div>
                            
                        


                        </header>
                            
            @endif


            
           

           </div>

       </article>
        
    @endforeach


    <article class="card">
         <div class="card-body bg-blue-100">

            <form wire:submit.prevent="store">
                <input wire:model="name" class="form-input block w-full mt-1" placeholder="Add title of the note that the beneficiary will see">

                 @error('name')
                 <strong class="text-yellow-400 text-bold">{{$message}}</strong>
                 @enderror
                
                
                <div class="flex justify-end mt-2">

                    <button type="submit" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">
                     Add title of the note
                    </button>


                </div>

            </form>


         </div>

    </article>

</section>
