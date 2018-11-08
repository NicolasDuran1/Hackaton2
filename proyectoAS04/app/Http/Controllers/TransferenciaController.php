<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Transferencias; //Clase que obtiene los datos de la API

class TransferenciaController extends Controller
{
	protected $transferencias;

    //Se inyecta la Clase por el constructor
    public function __construct(Transferencias $transferencias)
    {
        $this->transferencias = $transferencias;
    }

    public function store(Request $request)
    {
    	dd($request);
    	$todo = $request->all();
    	dd($todo);
    	$transferencias = $this->transferencias->trans();
    	$todo = $request->all();
    	$deposito = $request->amount; 
    	$fuente = $request->fromProduct; 
    	$destino = $request->toProduct; 

    	dd($deposito);

    }
}
