<x-specially-layout>

  
        @if (session('info'))
        <!-- component -->
          <div  class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline" role="alert">
              <p>{{session('info')}}</p>
          </div>
        @endif
    

    <x-table>
             <table>
                <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        UserId
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Body
                      </th>
                    
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>

                      
                      <th scope="col" class="relative px-6 py-3">
                          <a href="{{route('prueba.show')}}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Create</a>
                  
                      </th>


                    </tr>
                  </thead>

                  <tbody class="bg-white divide-y divide-gray-200">
              
                     @foreach ($usuariosArray as $item)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$item['id']}}
                          </td>

                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$item['userId']}}
                          </td>


                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$item['title']}}
                          </td>


                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$item['body']}}
                          </td>


                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{route('prueba.edit',$item)}}" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-0 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</a>
                          </td>

                          <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                            {{-- <a href="{{route('prueba.destroy',$item)}}" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-0 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">Delete</a> --}}
                            <form action="{{route('prueba.destroy',$item)}}" method="POST">
                           
                              @method('delete')
                              @csrf
                            <button class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-0 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline" type="submit">Delete</button>
                            </form>
                         
                         
                          </td>
                  
                        </tr>

                     @endforeach
                    
                     
                  </tbody>




             </table>
    </x-table>

</x-specially-layout>