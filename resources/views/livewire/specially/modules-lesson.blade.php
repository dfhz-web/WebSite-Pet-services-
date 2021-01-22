<div>
    @foreach ($section->lessons as $item)

    <article class="card mt-5">
        <div class="card-body">

            @if ($lesson->id == $item->id)
              <div class="">
                  <div class="flex items-center mb-4">
                      <label class="w-32">Name:</label>
                      <input wire:model="lesson.name" class="form-input w-full ">
                  </div>

                  @error('lesson.name')
                  <span class="text-1xl text-yellow-300">{{$message}}</span>
                      
                  @enderror

                 <div class="flex items-center mt-4 mb-4">
                     <label class="w-32" for="">Platform: </label>
                     <select wire:model="lesson.platform_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">>
                         @foreach ($platforms as $item)
                           <option value="{{$item->id}}">{{$item->name}}</option>
                             
                         @endforeach
                     </select>


                 </div>




                  <div class="flex items-center mb-4">
                    <label class="w-32">Url:</label>
                    <input wire:model="lesson.url" class="form-input w-full">
                  </div>

                @error('lesson.url')
                <span class="text-1xl text-yellow-300">{{$message}}</span>
                    
                @enderror


                <div class="flex items-center mb-4">
                    <label class="w-32">Fill out:</label>
                    <input wire:model="lesson.fillout" class="form-input w-full">
                  </div>

                @error('lesson.fillout')
                <span class="text-1xl text-yellow-300">{{$message}}</span>
                    
                @enderror

                <div class="flex items-center mb-4">
                    <label class="w-32">Answere:</label>
                    <input wire:model="lesson.answere" class="form-input w-full">
                  </div>

                @error('lesson.answere')
                <span class="text-1xl text-yellow-300">{{$message}}</span>
                    
                @enderror


                <div class="flex justify-end">

                    <button class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline" wire:click="cancelIt">
                      Cancel
                    </button>

                   <button wire:click="update" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">
                       Update
        
                  </button>


                </div>


              </div>

            @else
 
                        <header>
                            <h1><i class="fab fa-google-wallet text-yellow-300 mr-2"></i>Process: {{$item->name}}</h1>
                        </header>


                        <div class="">
                            <hr class="m-3">
                            <p class="text-sm">Platform:{{$item->platform->name}}</p>
                            <p class="text-sm">Link: <a class="text-blue-500" href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>
                            
                            
                            <p class="text-sm">Fillout: {{$item->fillout}}</p>
                            <p class="text-sm">Answere: {{$item->answere}}</p>

                            <div class="mt-2">
                                <i class="fas fa-pencil-alt mr-2 cursor-pointer text-yellow-400 text-sm" wire:click="edit({{$item}})">Edit</i>
                                <i class="fas fa-trash-alt cursor-pointer text-red-500 text-sm">Delete</i>
                            </div>
                        </div>

             @endif


        </div>
    </article>
        
    @endforeach




      <div x-data="{open:false}" class="mt-5">
    <a x-on:click="open = !open" class="flex items-center cursor-pointer">
      <i class="fas fa-plus-circle text-2xl text-yellow-300 m-2"></i>
      Add new process
    </a>

    <article class="card" x-show="open">
      <div class="card-body bg-yellow-100 text-black">


        <h1 class="text-xl font-bold mb-2">Add new process</h1>

        <div class="">
            <div class="flex items-center mb-4">
                <label class="w-32">Name:</label>
                <input wire:model="name" class="form-input w-full ">
            </div>

            @error('name')
            <span class="text-1xl text-yellow-600">{{$message}}</span>
                
            @enderror


           <div class="flex items-center mt-4 mb-4">
               <label class="w-32" for="">Platform: </label>
               <select wire:model="platform_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">>
                   @foreach ($platforms as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                       
                   @endforeach
               </select>


           </div>


          

           @error('platform_id')
           <span class="text-1xl text-yellow-600">{{$message}}</span>
               
           @enderror




            <div class="flex items-center mb-4">
              <label class="w-32">Url:</label>
              <input wire:model="url" class="form-input w-full">
            </div>

          @error('url')
          <span class="text-1xl text-yellow-600">{{$message}}</span>
              
          @enderror


          <div class="flex items-center mb-4">
              <label class="w-32">Fill out:</label>
              <input wire:model="fillout" class="form-input w-full">
            </div>

          @error('fillout')
          <span class="text-1xl text-yellow-600">{{$message}}</span>
              
          @enderror

          <div class="flex items-center mb-4">
              <label class="w-32">Answere:</label>
              <input wire:model="answere" class="form-input w-full">
            </div>

          @error('answere')
          <span class="text-1xl text-yellow-600">{{$message}}</span>
              
          @enderror


        </div>

        <div class="flex justify-end">

          <button wire:click="store" class="border border-indigo-500 text-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
           Add
          </button>
          <button x-on:click="open = false" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
            Cancel
          </button>
        </div>


      </div>


    </article>
  </div>
  
</div>
