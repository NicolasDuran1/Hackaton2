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
            foreach($clients as $c) 
            {
                if(($c->rut== $keyword)||($c->age== $keyword)||($c->region== $keyword)||($c->subType== $keyword)||($c->formattedRut== $keyword)||($c->firstName== $keyword)||($c->lastName== $keyword)||($c->lastName== $keyword)||($c->dv== $keyword)) 
                {
                    $client[] = $c;
  
                } 

            }        
        }
        else
        {
            return view('clients/index', compact('clients'));
        }
        //return view('system-mgmt/sala/index', ['salas' => $salas]);
        //-> sortByDesc('id');
        //$tipo_cliente = 0;
        return view('clients/index', ['clients' => $client]);
    }

    public function personas(Request $request)
    {
        $personas = $this->clients->all(); //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        
        foreach($personas as $p) 
        { 
            if($p->type == 'N') 
            { 
                $clients[] = $p;
            }
        }
        $tipo_cliente = 1;
        return view('clients/indexseparado', compact('clients','tipo_cliente'));
    }

    public function empresas(Request $request)
    {
        $empresas = $this->clients->all(); //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        
        foreach($empresas as $e) 
        { 
            if($e->type == 'J') 
            { 
                $clients[] = $e;
            }
        }
        $tipo_cliente = 2;
        return view('clients/indexseparado', compact('clients','tipo_cliente'));
    }
    

    public function show($id)
    {
        //dd('hola');

        $usuarios= $this->clients->all();
        foreach($usuarios as $u) {
                if($u->rut == $id) { 
                    $dueno = $u;
                    //dd($dueno);
                }
        }
        $client = $this->clients->find($id);

        //dd($client);

        return view('clients/show', compact('client','dueno'));
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
