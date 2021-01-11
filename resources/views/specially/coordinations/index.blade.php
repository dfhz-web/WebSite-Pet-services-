
<x-app-layout>
    <div class="container">
        <div class="">
          {{$assistance->id}}
    
        </div>
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
    
             @livewire('provider-search')
              
          </x-table>
       </div>
    
    
    
    
       </div>
    
    
    
    
    </div>

</x-app-layout>