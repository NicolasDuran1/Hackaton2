<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Debits; //Clase que obtiene los datos de la API

class DebitController extends Controller
{
    protected $debits;

    //Se inyecta la Clase por el constructor
    public function __construct(Debits $debits)
    {
        $this->debits = $debits;
    }

    public function transacciones($id)
    {
    	
    	$id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
    	//dd($id);
        $debits = $this->debits->all($id); 
        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

         $ingreso= '0';
        $egreso = '0';

        foreach($debits as $d){
            if($d->type == 'INGRESO'){
                $ingreso = $ingreso + $d->amount;
            }else{
                $egreso = $egreso + $d->amount;
            }
        }

        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        //dd($cards);
        //dd($id);

        //dd($cards);

        return view('debits/show', ['debits' => $debits, 'ingreso' => $ingreso, 'egreso' => $egreso]);

        //dd($cards);
        //dd($id);

        //dd($cards);

        return view('debits/show', compact('debits'));
    }

    public function transacciones2($id)
    {
        
        $id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
        //dd($id);
        $debits = $this->debits->all($id); 
        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

         $ingreso= '0';
        $egreso = '0';

        foreach($debits as $d){
            if($d->type == 'INGRESO'){
                $ingreso = $ingreso + $d->amount;
            }else{
                $egreso = $egreso + $d->amount;
            }
        }

        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        //dd($cards);
        //dd($id);

        //dd($cards);

        return view('debits/grafica', ['debits' => $debits, 'ingreso' => $ingreso, 'egreso' => $egreso]);

    }
}
