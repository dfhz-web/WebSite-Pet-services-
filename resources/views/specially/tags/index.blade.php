<x-app-layout>


    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10">
        <div class="">
            <a href="{{route('updates.index')}}"><i class="fas fa-hand-point-left"></i>Back</a>
            <br>



                                <!-- component -->
                    <div class="rounded overflow-hidden shadow-lg bg-white">
                        <div class="w-full">
                        <img src="http://source.unsplash.com/ugo3jZ_qtKo/604x253" class="w-full">
                        </div>
                        <div class="px-2 pb-5">
                        <h1 class="text-4xl justify-between font-bold">Blog</h1>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4"
                                src="https://cdn.pixabay.com/photo/2020/09/29/23/38/team-5614157__340.png">
                            <div class="text-sm">
                            <p class="text-gray-900 leading-none text-xl font-bold">Main page of tags <span class="font-thin text-gray-700">(Do it!)</span></p>
                            <p class="text-black-600">
                                <span class="pr-1"><a class="text-underline" href="#">#improve</a></span>
                                <span class="pr-1"><a class="text-underline" href="#">#keep doing</a></span>
                                <span class="pr-1"><a class="text-underline" href="#">#don't give up</a></span>
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="flex items-center pb-5 px-5">
                        <div class="w-1/3 flex">
                           
                            <div class="text-sm">
                            <p class="leading-none ml-2"></p>
                            </div>
                        </div>
                        <div class="w-1/3"></div>
                        <div class="w-1/3 float-right text-right">
                            <div class="text-sm">
                            <span>
                                @if (session('info'))
                                <!-- component -->
                                  <div  class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
                                      <p>{{session('info')}}</p>
                                  </div>
                                @endif
                            </span>
                            <button class="ml-5 py-1 px-2 bg-blue-500 hover:bg-blue-700 text-white font-bold"></button>
                            </div>
                        </div>
                        </div>
                    </div>







        </div>

        <div class="">

                                
                                <div class="card">

                                    



                                    <div class="card-body">
                                        <div class="mt-3 ml-20">
                                            <a class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline"
                                            href="{{route('tags.create')}}">Create</a>

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


                                                            @foreach ($tags as $tag)

                                                            <tr class="hover:bg-grey-lighter">
                                                                <td class="py-4 px-6 border-b border-grey-light">{{$tag->name}}</td>
                                                                <td class="text-center w-10">
                                                                    <a href="{{route('tags.edit',$tag)}}" class=" border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</a>
                                                                </td>
                                                                <td class="w-10">
                                                                    <form action="{{route('tags.destroy',$tag)}}" method="POST">
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