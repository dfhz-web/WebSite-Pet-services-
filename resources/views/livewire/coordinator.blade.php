<div class="container py-8">

    <x-table>
        <div class="px-7 py-2">
            <input  wire:model="search" class="form-input w-full shadow-sm" placeholder="looking for an especify's case?.">
        </div>

       @if ($assistances->count())
                

        <table class="min-w-full divide-y divide-gray-200">



            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                User
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Symptoms
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Address
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
                </th>
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Coordinate</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

            @foreach ($assistances as $assistance)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="https://cdn.pixabay.com/photo/2016/04/01/10/11/avatar-1299805_960_720.png" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                       {{-- {{$assistance->users}} --}}
                       {{$assistance->user->name  }}
                      
                  

                       
                      </div>
                      <div class="text-sm text-gray-500">
                        {{$assistance->email}}
                        
                      </div>
                    </div>
                  </div>


                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-500">{{$assistance->symptoms}}</div>
                </td>
                
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$assistance->address}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      @switch($assistance->status)
                            @case(0)
                            <span class="cursor-pointer px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-500 text-white">
                              coordinate
                            </span>
                                @break
                            @case(1)
                            <span class="cursor-pointer px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-400 text-white">
                              coordinated
                            </span> 
                                @break
                           
                            @break

                            @default
                                
                        @endswitch
                    
                    </span>
                  </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="{{route('coordinations.show',$assistance)}}" class="text-indigo-600 hover:text-indigo-900">Go</a>
                </td>
              </tr>

              @endforeach
  
              <!-- More ross... -->
            </tbody>


            
          </table>

          @else
          <div class="px-8 py-2">No results matched</div>

         @endif

    
    
    
    
    
        </x-table>



    
</div>
