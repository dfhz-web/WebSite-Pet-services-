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
       
        

          $response = $cliente->request('POST','http://186.80.212.253:8081/api/Client', [

            // 'json' => $request->all()

            'id_tipo_identificacion'  => $request->id_tipo_identificacion,
            'no_identificacion' => $request->no_identificacion,
            'id_naturaleza_tercero' =>$request->id_naturaleza_tercero,
            'id_regimen_tercero' =>$request->id_regimen_tercero,
            'digito_verificacion' =>$request->digito_verificacion,
            'nombres_terceros' =>$request->nombres_terceros,
            'apellidos_terceros' =>$request->apellidos_terceros,
            'id_genero_tercero' =>$request->id_genero_tercero,
            'fecha_nacimiento_tercero' =>$request->fecha_nacimiento_tercero,
            'id_pais_tercero' =>$request->id_pais_tercero,
            'id_departamento_tercero' =>$request->id_departamento_tercero,
            'id_ciudad_tercero' =>$request->id_ciudad_tercero,
            'razon_social_tercero' =>$request->razon_social_tercero,
            'establecimento_comercial_tercero' =>$request->establecimento_comercial_tercero,
            'direccion_tercero' =>$request->direccion_tercero,
            'telefono1_tercero' =>$request->telefono1_tercero,
            'telefono2_tercero' =>$request->telefono2_tercero,
            'usuario_registro' =>$request->usuario_registro,
            'fecha_registro' =>$request->fecha_registro,
            'estado_tercero' =>$request->estado_tercero,
            'id_impuesto' =>$request->id_impuesto,
            
        ]);
        return "Well done";

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
