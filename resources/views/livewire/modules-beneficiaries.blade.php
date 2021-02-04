<div>
    <x-slot name="module">
        {{$module->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold mb-5">People that have been register for use this module!</h1>
    <hr class="mt-2 mb-6">

    {{-- //////// --}}


    
        <div class="grid grid-cols-2 gap-5">
              <div class="" >
                  
                
              
      
      
              </div>
          {{-- <div class="">
      
          </div> --}}
      
      
        
      
      
        </div>
      
          
      
      
          <div class="mt-5">
          <x-table>
                  <div class="px-7 py-2">
                       <input  wire:model="search" class="form-input w-full shadow-sm" placeholder="looking for a user!">
                  </div>
      
      
                  @if ($beneficiaries->count())
                      
                 
                <table class="min-w-full divide-y divide-gray-200">
      
      
      
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                          </th>
                         
                        
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    
                        @foreach ($beneficiaries as $beneficiary)
                            
                    
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
      
                        
                   
                                 
                                    <img class="h-10 w-10 rounded-full" src="{{$beneficiary->profile_photo_url}}" alt="">
                                   
      
                          
                                  </div>
                              <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{$beneficiary->name}}
                                        </div>
                                      
                              </div>
                            </div>
                          </td>

                          <td class="px-6 py-4 whitespace-nowrap">
                             <div class="text-sm text-gray-900"> {{$beneficiary->email}}</div>
                          </td>
      
      
                      
                          
                          {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="" class="text-indigo-600 hover:text-indigo-900">See</a>
                          </td> --}}
                        </tr>
      
      
                        @endforeach
            
                    <!-- More rows... -->
                  </tbody>
      
      
                  
                </table>
      
                <div class="px-6 py-4">
                  {{$beneficiaries->links()}}
      
                </div>
      
                @else
                  <div class="px-8 py-2">No results matched</div>
      
                @endif
      
          </x-table>
      </div>
            
        
      
      


    {{-- /////// --}}
</div>
