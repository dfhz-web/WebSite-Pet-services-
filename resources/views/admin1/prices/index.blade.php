@extends('adminlte::page')
@section('title', 'Admin-healthylife')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('administrator.prices.create')}}">Create</a>
    <h1>Lists of prices</h1>
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
                        {{-- <th>Value</th> --}}
                        <th colspan="2"></th>
                    </tr>


                </thead>

                <tbody>

                    @foreach ($prices as $price)
                     <tr>
                         <td>{{$price->id}}</td>
                         <th>{{$price->name}}</th>
                         {{-- <th>{{$price->value}}</th> --}}
                         
                         <th width="10px">

                            <a class="btn btn-primary" href="{{route('administrator.prices.edit',$price)}}">Edit</a>

                         </th>


                         <th width="10px">
                             <form action="{{route('administrator.prices.destroy',$price)}}" method="post">
                                @csrf  
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>

                             </form>
                         </th>
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