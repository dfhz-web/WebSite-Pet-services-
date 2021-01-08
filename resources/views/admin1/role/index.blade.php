@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <h1>Roles available</h1>
@stop

@section('content')
  <div class="card">
        <div class="container card-header">
            <div class="row">
                <div class="col">
                  
                  
                   
                </div>
                <div class="col">
                  <a  href="{{route('administrator.roles.create')}}">Create Role</a>
               
                </div>
               <div class="col">
                 

       
                 
                  <div class="alert alert-success" role="alert">
                  <strong>Well done!</strong>
                  </div>
                     
            


                  
                 
                </div>
            </div>
        </div>







       <div class="card-body">


        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
              </tr>
            </thead>



            <tbody>

                @forelse ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="10px">
                        <a class="btn btn-warning" href="{{route('administrator.roles.edit',$role)}}">
                        Edit
                        </a>
                    </td>

                    <td width="10px">
                        <form action="{{route('administrator.roles.destroy',$role)}}" method="POST">
                           
                            @method('delete')
                            @csrf
                         <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                 
                  </tr>
                @empty
                  <tr>
                      <td colspan="4">any role available!</td>
                  </tr>
                    
                @endforelse
             
            </tbody>
          </table>

       </div>

   </div>
   



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop