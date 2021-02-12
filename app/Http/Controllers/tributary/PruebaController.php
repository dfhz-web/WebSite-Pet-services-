<?php

namespace App\Http\Controllers\tributary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PruebaController extends Controller
{

    public function index()
    {
       $usuarios = HTTP::get('http://jsonplaceholder.typicode.com/posts');
       $usuariosArray = $usuarios->json();

        return view('tributary.prueba.index',compact('usuariosArray'));
    }

    public function show()
    {

        return view('tributary.prueba.create');
    }

    public function create(Request $request)
    {
        $result = HTTP::post('http://jsonplaceholder.typicode.com/posts',[


            'userId' => $request->userId,
            'title' => $request->title,
            'body' => $request->body





        ]);

       

        // return redirect()->route('prueba.index',compact('result'));
        $usuarios = HTTP::get('http://jsonplaceholder.typicode.com/posts');
        $usuariosArray = $usuarios->json();

        // return view('tributary.prueba.index',compact('usuariosArray'))->with('info','It was successfully created');
        return redirect()->route('prueba.index',compact('usuarios'))->with('info','It was successfully created');




    }

    public function showedit($item)
    {

        $result = Http::get('http://jsonplaceholder.typicode.com/posts/'.$item);
        $result->json();


        return view('tributary.prueba.showedit',compact('result','item'));

      
    }

    public function update(Request $request,$item)
    {

     

        $response = HTTP::put("https://jsonplaceholder.typicode.com/posts/$item",[

           'userId' => $request->userId,
            'title' => $request->title,
            'body' => $request->body
         ]);
        //  return redirect()->route('prueba.index',compact('response'));

         $usuarios = HTTP::get('http://jsonplaceholder.typicode.com/posts');
        // $usuariosArray = $usuarios->json();

        // return view('tributary.prueba.index',compact('usuariosArray'))->with('info','It was successfully updated');
        return redirect()->route('prueba.index',compact('usuarios'))->with('info','It was successfully updated');


    }

    public function destroy($item)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$item);
         $response->json();

        $usuarios = HTTP::get('http://jsonplaceholder.typicode.com/posts');
        // $usuariosArray = $usuarios->json();

        // return view('tributary.prueba.index',compact('usuariosArray'))->with('info','It was successfully deleted');

        return redirect()->route('prueba.index',compact('usuarios'))->with('info','It was successfully deleted');


    }
}
