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
                    id_tercero
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_tipo_identificacion
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    no_identificacion
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_naturaleza_tercero
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_regimen_tercero
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    digito_verificacion
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    nombres_terceros
                  </th>


                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    apellidos_terceros
                  </th>


                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_genero_tercero
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    fecha_nacimiento_tercero
                  </th>


                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_pais_tercero
                  </th>

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_departamento_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_ciudad_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    razon_social_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    establecimento_comercial_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    direccion_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    telefono1_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    telefono2_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    usuario_registro
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    fecha_registro
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    estado_tercero
                  </th> 

                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    id_impuesto
                  </th> 
                
                
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>

                  
                  <th scope="col" class="relative px-6 py-3">
                      <a href="{{route('client.show')}}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Create</a>
              
                  </th>


                </tr>
              </thead>

              <tbody class="bg-white divide-y divide-gray-200">
          
                 @foreach ($Array as $item)
                    <tr>


                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_tercero']}}
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_tipo_identificacion']}}
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['no_identificacion']}}
                      </td>

                      
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_naturaleza_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_regimen_tercero']}}
                      </td>
                      
                      



                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['digito_verificacion']}}
                      </td>



                     <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['nombres_terceros']}}
                      </td>




                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{$item['apellidos_terceros']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{$item['id_genero_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['fecha_nacimiento_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{$item['id_pais_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_departamento_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{$item['id_ciudad_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{$item['razon_social_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['establecimento_comercial_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['direccion_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['telefono1_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{$item['telefono2_tercero']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['usuario_registro']}}
                      </td>



                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['fecha_registro']}}
                      </td>




                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['estado_tercero']}}
                      </td>


                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$item['id_impuesto']}}
                      </td>


                


                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{route('client.edit',$item['id_tercero'])}}" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-0 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</a>
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                        <form action="{{route('client.destroy',$item['id_tercero'])}}" method="POST">
                       
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