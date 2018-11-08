<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Repositories\Debits; //Clase que obtiene los datos de la API

class ConsumoController extends Controller
{
    protected $debits;

    //Se inyecta la Clase por el constructor
    public function __construct(Debits $debits)
    {
        $this->debits = $debits;
    }

    public function index()
    {
    	$user = Auth::user();
        $id = $user->rut."?beginDate=01-01-2018&endDate=06-11-2018";

    	//$id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
    	//dd($id);
        $debits = $this->debits->all($id); 
        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        //dd($cards);
        //dd($id);

        //dd($cards);
        $ingreso= '0';
        $egreso = '0';

        foreach($debits as $d){
            if($d->type == 'INGRESO'){
                $ingreso = $ingreso + $d->amount;
            }else{
                $egreso = $egreso + $d->amount;
            }
        }

        print_r($ingreso.'      ');
        print_r($egreso);

        return view('consumo/show', compact('debits'));
    }
}
