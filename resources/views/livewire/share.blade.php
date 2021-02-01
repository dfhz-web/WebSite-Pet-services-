

<div class="container">


    <div class="flex">

        <div class="mt-6 ml-20">
            <a class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline"
            href="{{route('shares.create')}}">Create</a>

        </div>
        <div class="">
            <h1 class="mt-3 ml-10 py-4 px-3 bg-grey-lightest font-bold uppercase text-sm text-grey-dark ">POSTS</h1>
        </div>
    </div>







        <div class="card mt-5">

                   


            <div class="card-body">

        
        <div class="mt-6">
            <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
            placeholder="search by name">
        </div>

        @if ($posts->count())

        <div class="w-full mx-auto">
            <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">NAME</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>

                </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)

                       <tr class="hover:bg-grey-lighter">
                           <td class="py-4 px-6 border-b border-grey-light">{{$post->id}}</td>
                           <td class="py-4 px-6 border-b border-grey-light">{{$post->name}}</td>
                           <td class="text-center w-10">
                               <a href="{{route('shares.edit',$post)}}" class=" border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</a>
                           </td>
                           <td class="w-10">
                               <form action="{{route('shares.destroy',$post)}}" method="POST">
                                @csrf  
                                @method('delete')

                                <button type="submit"  class="border border-red-500 text-red-500 rounded-md px-4 py-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                Delete
                               </button>

                               </form>
                           </td>

                           
                         
                      
                       </tr>
                        
                    @endforeach
                    





                </tbody>
            </table>
            </div>
        </div>
        <div class="">
            {{$posts->links()}}
        </div>

        
        <footer class="mt-2 bg-gray-600 w-full text-center border-t border-grey p-4 pin-b bg-blue-dark cursor-pointer">
            <a  class="font-bold font-sans text-white">
                <i class="fas fa-hand-pointer text-black"></i></a>
            
        </footer> 



        
        @else
        <strong>No result found</strong>

        
            
      
       


            @endif

                   

           
                
  
  
  
</div>
