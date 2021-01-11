<div>
    <div class="container py-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
    
        <x-table>
                <div class="px-7 py-2">
                     <input wire:keydown="search_all_pages" wire:model="search" class="form-input w-full shadow-sm" placeholder="Here you will find a providers!">
                </div>
    
    
                @if ($providers->count())
               @foreach ($providers as $provider)
                   
               
               
                <ul>
                    <li>{{$provider->name}}</li>
                    <li>{{$provider->address}}</li>
                </ul>

                @endforeach
                    
               
            
    


              <div class="px-6 py-4">
                {{$providers->links()}}
    
              </div>
    


              @else
                <div class="px-8 py-2">No results matched</div>
    
              @endif
    
        </x-table>
          
      
    </div>
    
</div>
