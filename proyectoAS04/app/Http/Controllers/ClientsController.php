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

    public function index()
    {
        $clients = $this->clients->all(); //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

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

        return view('clients/index', compact('clients'));
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
