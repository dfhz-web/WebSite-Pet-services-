<form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
    <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
      type="search" name="search" placeholder="Search">
    
      <button type="submit"  class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg absolute right-0 top-0 mt-2 ">
       Search
     </button>


    @if ($search)

        <ul class="absolute z-50 left-0 w-full rounded-lg  bg-green bg-gray-100 mt-1 over-flow-hidden">
        
         @forelse ($this->results as $result)
            <li class="hover:bg-green-500 cursor-pointer text-sm px-5 leading-8">
               <a href="{{route('modules.show',$result)}}">{{$result->title}}</a>
            </li>
            @empty 

            <li class="hover:bg-green-500 cursor-pointer text-sm px-5 leading-8">
               any results found
            </li>

 
         @endforelse
        
        </ul>
     @endif
   

     </form>        
  
