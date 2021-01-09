<div>
    <div class="card-header">
        <input wire:keydown="search_all_pages" wire:model="search" class="form-control w-100%" placeholder="Search user....">

   </div>

    <div class="card">

      
           
      

 
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th></th>
                     </tr>

                 </thead>

                 @if ($users->count())

                 <tbody>
                     @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('administrator.users.edit', $user)}}">Edit-user</a>
                                
                            </td>
                        <tr>
                         
                     @endforeach

                 </tbody>

                 @else 
                     <div class="card-body">
                         <strong>No users matched</strong>
                     </div>

                 @endif
             </table>


         </div>

        

     <div class="card-footer">
         {{$users->links()}}

     </div>

    </div>
</div>
