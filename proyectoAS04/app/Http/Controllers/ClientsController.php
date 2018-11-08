<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Clients; //Clase que obtiene los datos de la API

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Clase almacenada en app/repositories/Posts.php
    protected $clients;

    //Se inyecta la Clase por el constructor
    public function __construct(Clients $clients)
    {
        $this->clients = $clients;
    }

    public function index(Request $request)
    {
        $clients = $this->clients->all(); //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php


        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            
            foreach($clients as $c){
                if(($c->rut== $keyword)||($c->age== $keyword)||($c->region== $keyword)||($c->subType== $keyword)||($c->formattedRut== $keyword)||($c->firstName== $keyword)||($c->lastName== $keyword)||($c->lastName== $keyword))
                    $client[] = $c;
            }
           //         dd($clients);
                           
        }else{
            return view('clients/index', compact('clients'));
        }
        //return view('system-mgmt/sala/index', ['salas' => $salas]);
        //-> sortByDesc('id');
        return view('clients/index', ['clients' => $client]);
        












        //dd($clients);
        //Explicación consultas con API: (ejemplo en lineas 36-39)
        //1) deben leer los datos de la API y almacenarlos en una variable (linea 28)
        //2) recorrer la variable con un foreach
        //3) los JOIN son equivalentes a los if. En el ejemplo se ve la sintaxis. Es importante que el resultado se almacene en un array, de lo contrario solo almacenará el primer resultado

    //    foreach($clients as $c){
    //        if($c->type == 'J')
    //            $caca[] = $c;
    //    }
        
        

    //    dd($caca);    //mostrar el array en pantalla

        
    }
    

    public function show($id)
    {
        //dd('hola');
        $client = $this->clients->find($id);

        //dd($client);

        return view('clients/show', compact('client'));
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
