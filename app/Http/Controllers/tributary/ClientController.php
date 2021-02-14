<?php

namespace App\Http\Controllers\tributary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use GuzzleHttp\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public $cliente;
    // http://186.80.212.253:8081/api/Cliente
    // public function __construct()
    // {
    //     $this->cliente = new Client([
    //         'base_uri' => 'http://186.80.212.253:8081/api/',
            
    //    ]);
    // }


    public function index()
    {
        $cliente = new Client([
            'base_uri' => 'http://186.80.212.253:8081/api/',
            
       ]);
    
       $response = $cliente->request('GET', 'Cliente');
   
       $response = json_decode($response->getBody()->getContents());

  


      //      // dd($response->getBody()->getContents());
      //      return json_decode($response->getBody()->getContents());
      

       return view('tributary.client.index',compact('response'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tributary.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cliente = new Client([
            'base_uri' => 'http://186.80.212.253:8081/api/',
            
       ]);
       
        

        $response = $cliente->request('POST', 'Cliente', [
            
            'form_params' => [
                'json' => $request->all()
            ]
            
            
        ]);

        return $response;

        return redirect()->route('clients.index',$response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
