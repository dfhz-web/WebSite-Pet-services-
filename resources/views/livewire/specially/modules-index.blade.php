<div class="container py-8">
    
  <div class="grid grid-cols-2 gap-5">
        <div class="" >
            
          
          <a class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline"
            href="{{route('updates.create')}}">Create new module</a>



        </div>
    {{-- <div class="">

    </div> --}}


    <div class="" x-data="{ open: false }">
         
              <a x-on:click="open = true" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Update Blog</a>

              <div  x-show="open" x-on:click.away="open = false" class="origin-top-right  absolute right-45 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              
                <a href="{{route('categories.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Categories</a>
              
              </div> 

        

    </div>


  </div>

    


    <div class="mt-5">
    <x-table>
            <div class="px-7 py-2">
                 <input wire:keydown="search_all_pages" wire:model="search" class="form-input w-full shadow-sm" placeholder="looking for a module?. Here you will!">
            </div>


            @if ($modules->count())
                
           
          <table class="min-w-full divide-y divide-gray-200">



                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Rate
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      People used
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      status
                    </th>
                  
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              
                  @foreach ($modules as $module)
                      
              
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                          <div class="flex-shrink-0 h-10 w-10">

                  
             
                               @isset($module->picture)
                              <img class="h-10 w-10 rounded-full" src={{Storage::url($module->picture->url)}} alt="">
                              @else
                              <img class="h-10 w-10 rounded-full" src="https://images.pexels.com/photos/53114/horse-arabs-stallion-ride-53114.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                              @endisset

                    
                            </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                             {{$module->title}}
                            </div>
                          <div class="text-sm text-gray-500">
                            {{$module->kind->name}}
                          </div>
                        </div>
                      </div>
                    </td>


                    <td class="px-6 py-4 whitespace-nowrap">
                      
                      <div class="text-sm text-gray-500 flex items-center">
                        {{$module->rating}}
                        <ul class="flex text-sm ml-1">
                          <li class="mr-1">
                            <i class="fas fa-star text-{{$module->rating >= 1 ? 'yellow' : 'gray'}}-400">
            
                            </i>
                            
                          </li>
                          <li class="mr-1">
                            <i class="fas fa-star text-{{$module->rating >= 2 ? 'yellow' : 'gray'}}-400 ">
            
                            </i>
                            
                          </li>
                          <li class="mr-1">
                            <i class="fas fa-star text-{{$module->rating >= 3 ? 'yellow' : 'gray'}}-400">
            
                            </i>
                            
                          </li>
                          <li class="mr-1">
                            <i class="fas fa-star text-{{$module->rating >= 4 ? 'yellow' : 'gray'}}-400">
            
                            </i>
                            
                          </li>
                          <li class="mr-1">
                            <i class="fas fa-star text-{{$module->rating == 5 ? 'yellow' : 'gray'}}-400 ">
            
                            </i>
                            
                          </li>
                        </ul>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{$module->beneficiaries->count()}}
                    </td>
                    
                    <td class="px-6 py-4 whitespace-nowrap">
                     
                        @switch($module->status)
                            @case(1)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-500 text-white">
                              eraser
                            </span>
                                @break
                            @case(2)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-400 text-white">
                              check
                            </span> 
                                @break
                            @case(3)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                              published
                            </span>
                            @break

                            @default
                                
                        @endswitch
                    
                    </td>
                    
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{route('updates.edit',$module)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                  </tr>


                  @endforeach
      
              <!-- More rows... -->
            </tbody>


            
          </table>

          <div class="px-6 py-4">
            {{$modules->links()}}

          </div>

          @else
            <div class="px-8 py-2">No results matched</div>

          @endif

    </x-table>
</div>
      
  
</div>
