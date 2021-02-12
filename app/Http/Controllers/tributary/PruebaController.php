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

       return $result;


        return redirect()->route('prueba.index',compact('usuariosArray'));


        // return view('tributary.prueba.create',compact('result'));


    }
}
