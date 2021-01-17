<x-app-layout>
    <div class="container">
 
        <div class="grid grid-cols-1 lg:grid-cols-2 py-8">
        <div class="text-center">
        <x-table>
        
        <form action="{{route('coordinations.store')}}" method="POST">
                
            @csrf
            <label>
                 Name:
                  <br>
                  <input type="text" name="name">
            </label>
           <br>
           <label>
             <br>
              kind:
             <br>
             <input type="text" name="kind">
           </label>
           
    
            <label>
             <br>
              Address
             <br>
             <input type="text" name="address">
           </label>
          <br>
            <br>
            <label>
                <br>
                Email:
                <br>
                <input type="email" name="email">
            </label>
             <br>
             <label>
                <br>
                 Cellphone:
                <br>
                <input type="text" name="phone">
             </label>
             <br>
             {{-- ..status waitss. --}}
             <label>
                <br>
                 Price First Consultation:
                <br>
                <input type="text" name="price">
             </label>
             <br>
             <label>
                <br>
                 Open_week:
                <br>
                <input type="text" name="open_week">
             </label>
             <br>
             <label>
                <br>
                 Break_week:
                <br>
                <input type="text" name="break_week">
             </label>
             <br>
    
             <label>
                <br>
                 Close_week:
                <br>
                <input type="text" name="close_week">
             </label>
    
    
             <br>
             <label>
                <br>
                 Open_weekend:
                <br>
                <input type="text" name="open_weekend">
             </label>
             <br>
             <label>
                <br>
                 Break_weekend:
                <br>
                <input type="text" name="break_weekend">
             </label>
             <br>
    
             <label>
                <br>
                 Close_weekend:
                <br>
                <input type="text" name="close_weekend">
             </label>
    
             <label>
                <br>
                 Note:
                <br>
                <input type="text" name="note">
              </label>
    
            
    
    
           
    
            
    
            <BR>
                <button class="btn btn-primary" type="submit">Send</button>
        </form>
        </x-table>
        </div>
    
        <div>
          <x-table>
            <div class="container pb-1 mt-10">

            <x-table>

               <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                           Currently case:
                        </h3>
               </div>

                    <div class="border-t border-gray-200">
                      <dl>
                                 <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                     Symptoms: 
                                    </dt>
                                       <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                       {{$assistance->symptoms}}
                                       </dd>
                                 </div>
                         <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                               Address
                             </dt>
                             <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                              {{$assistance->address}}
                             </dd>
                         </div>

                 
                  </dl>
                 </div>
          
           
           
    

            </x-table>

         </div>
    
             @livewire('provider-search')
              
          </x-table>
       </div>
    
    
    
    
       </div>
    
    
    
    
    </div>

</x-app-layout>