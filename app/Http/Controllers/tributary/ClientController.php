<?php

namespace App\Http\Controllers\tributary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{

    public int $example;


    public function index()
    {
       $usuarios = HTTP::get('http://186.80.212.253:8081/api/Cliente');
       $Array =$usuarios->json();

    
       
            //    return $Array;
        return view('tributary.client.index',compact('Array'));
    }


    public function show()
    {

        return view('tributary.client.create');
    }


   
    public function create(Request $request)
    {     
       
            $result = HTTP::post('http://186.80.212.253:8081/api/Cliente',[

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
        return $result;

        return redirect()->route('client.index',compact('result'))->with('info','It was successfully updated');

        // return $result;

       

        // $usuarios = HTTP::get('http://186.80.212.253:8081/api/Cliente');
        // $Array = $usuarios->json();

        // return redirect()->route('client.index',compact('usuarios'))->with('info','It was successfully created');




    }

    public function showedit($item)
    {
       

        $result = Http::get('http://186.80.212.253:8081/api/Cliente/'.$item);
        $result->json();


        return view('tributary.client.showedit',compact('result','item'));

      
    }

    public function update(Request $request,$item)
    {

     

        $response = HTTP::put("http://186.80.212.253:8081/api/Cliente/$item",[


            'id_tipo_identificacion'=>$request->id_tipo_identificacion,
            'no_identificacion' =>$request->no_identificacion,
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
            'id_impuesto' =>$request->id_impuesto
         ]);

        //  return redirect()->route('prueba.index',compact('response'));
        return $response;
         $usuarios = HTTP::get('http://186.80.212.253:8081/api/Cliente');
        // $usuariosArray = $usuarios->json();

        // return view('tributary.prueba.index',compact('usuariosArray'))->with('info','It was successfully updated');
        return redirect()->route('prueba.index',compact('usuarios'))->with('info','It was successfully updated');


    }

    public function destroy($item)
    {
        $response = Http::delete('http://186.80.212.253:8081/api/Cliente/'.$item);
         $response->json();

        $usuarios = HTTP::get('http://186.80.212.253:8081/api/Cliente');
        // $usuariosArray = $usuarios->json();

        // return view('tributary.prueba.index',compact('usuariosArray'))->with('info','It was successfully deleted');

        return redirect()->route('prueba.index',compact('usuarios'))->with('info','It was successfully deleted');


    }


  
}
