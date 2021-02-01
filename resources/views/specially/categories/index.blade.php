<x-app-layout>

    <!-- component -->
    

    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
            <div class="">

                <a href="{{route('updates.index')}}"><i class="fas fa-hand-point-left"></i>Back</a>

                <div class="bg-white overflow-hidden border-b-4 border-blue-500 w-full h-full ">
                    <img src="https://images.unsplash.com/photo-1573748240263-a4e9c57a7fcd" alt="People" class="w-full object-cover h-32 sm:h-48 md:h-64">
                    <div class="p-4 md:p-6">
                    <p class="text-blue-500 font-semibold text-xs mb-1 leading-none">Blog</p>
                    <h3 class="font-semibold mb-2 text-xl leading-tight sm:leading-normal">List of categories</h3>
                    <div class="text-sm flex items-center">
                        <svg class="opacity-75 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12" height="12" viewBox="0 0 97.16 97.16" style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                        <path d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"/>
                        <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"/>
                        </svg>
                        @if (session('info'))
                        <!-- component -->
                          <div  class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
                              <p>{{session('info')}}</p>
                          </div>
                          @else
                          <p class="leading-none">Keep update!</p>
                            
                        @endif
                    </div>
                    </div>
                </div>

                {{-- <div class="mt-5">
                   
               </div> --}}

            </div>

            <div class="">
                {{-- <article class="text-center"><i class="text-center fab fa-blogger ">  List of categories</i></article>
                <br> --}}

                <div class="card">

                   



                    <div class="card-body">
                        <div class="mt-3 ml-20">
                            <a class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline"
                            href="{{route('categories.create')}}">Create</a>
    
                        </div>
                       <!-- component -->
                                <div class="w-full mx-auto">
                                    <div class="bg-white shadow-md rounded my-6">
                                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                        <thead>
                                        <tr>
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($categories as $category)

                                               <tr class="hover:bg-grey-lighter">
                                                   <td class="py-4 px-6 border-b border-grey-light">{{$category->name}}</td>
                                                   <td class="text-center w-10">
                                                       <a href="{{route('categories.edit',$category)}}" class=" border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</a>
                                                   </td>
                                                   <td class="w-10">
                                                       <form action="{{route('categories.destroy',$category)}}" method="POST">
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
                                   




                        
                        








                      
                    </div>
                </div>


            </div>









    </div>


    
</x-app-layout>