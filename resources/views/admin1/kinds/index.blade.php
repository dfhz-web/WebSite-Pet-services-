@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('administrator.kinds.create')}}">Create</a>
    <h1>List of kinds of the modules!.</h1>
@stop

@section('content')
            @if (session('info'))
            <div class="alert alert-danger">
            {{session('info')}}
            </div>
            
            @endif
  
      <div class="card">
          <div class="card-body">
              <table class="table table-striped">
                  <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>

                  </thead>

                  <tbody>

                    @foreach ($kinds as $kind)
                       <tr>
                           <td>{{$kind->id}}</td>
                           <td>{{$kind->name}}</td>
                           <td width="10px">
                               <a class="btn btn-primary" href="{{route('administrator.kinds.edit',$kind)}}">Edit</a>
                           </td>
                           <td width="10px">
                               <form action="{{route('administrator.kinds.destroy',$kind)}}" method="POST">
                                 @csrf 
                                 @method('DELETE')
                                 <button class="btn btn-danger" type="submit">Delete</button>

                              </form>
                           </td>
                       </tr>
                       
                        
                    @endforeach


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