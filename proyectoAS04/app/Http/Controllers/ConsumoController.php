<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Repositories\Clients; //Clase que obtiene los datos de la API

use App\Repositories\Debits; //Clase que obtiene los datos de la API

class ConsumoController extends Controller
{

    protected $clients;
    protected $debits;

    //Se inyecta la Clase por el constructor
    public function __construct(Clients $clients, Debits $debits)
    {
        $this->clients = $clients;
        $this->debits = $debits;
    }

    // protected $debits;

    //Se inyecta la Clase por el constructor
    // public function __construct(Debits $debits)
    // {
    //     $this->debits = $debits;
    // }

    // public function index()
    // {
    // 	$user = Auth::user();
    //     $id = $user->rut."?beginDate=01-01-2018&endDate=06-11-2018";

    // 	//$id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
    // 	//dd($id);
    //     $debits = $this->debits->all($id); 
    //     //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

    //     //dd($cards);
    //     //dd($id);

    //     //dd($cards);
    //     $ingreso= '0';
    //     $egreso = '0';

    //     foreach($debits as $d){
    //         if($d->type == 'INGRESO'){
    //             $ingreso = $ingreso + $d->amount;
          
    //         }else{
    //             $egreso = $egreso + $d->amount;
    
    //         }
    //     }

        

    //     print_r($ingreso.'      ');
    //     print_r($egreso);

    //    // return view('consumo/show', compact('debits', 'ingresos', 'egresos'));
    //     return view('consumo/show', ['debits' => $debits, 'ingreso' => $ingreso, 'egreso' => $egreso]);
    // }

    public function graph_trans($id)
    {
        // $user = Auth::user();
        // $usuarios= $this->clients->all();
        // foreach($usuarios as $u) {
        //     if($u->rut == Auth::user()->rut) { 
        //         $clienteactual = $u;
        //         //dd($dueno);
        //     }
        // }
        //dd($clienteactual);
        // foreach($user as $u){
        //     if($d->type == 'INGRESO'){
        //         $ingreso = $ingreso + $d->amount;
          
        //     }else{
        //         $egreso = $egreso + $d->amount;
    
        //     }
        // }

        $id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
        //dd($id);
        $debits = $this->debits->all($id); 

        // foreach($debits as $d){
        //     if($d->type == 'INGRESO'){
        //         $ingreso = $ingreso + $d->amount;
          
        //     }else{
        //         $egreso = $egreso + $d->amount;
    
        //     }
        // }

        //dd($debits);

       // return view('consumo/show', compact('debits', 'ingresos', 'egresos'));
        return view('consumo/graph_trans', compact('debits'));
    }
}
