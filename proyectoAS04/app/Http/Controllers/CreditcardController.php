<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Cards; //Clase que obtiene los datos de la API

class CreditcardController extends Controller
{
    protected $cards;

    //Se inyecta la Clase por el constructor
    public function __construct(Cards $cards)
    {
        $this->cards = $cards;
    }

    public function transacciones($id)
    {
    	
    	$id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
    	//dd($id);
        $cards = $this->cards->all($id); 
        //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

        //dd($cards);
        //dd($id);

        //dd($cards);

        return view('cards/show', compact('cards'));
    }


    // public function transacciones($id)
    // {
    	
    // 	$id = $id."?beginDate=01-01-2018&endDate=06-11-2018";
    // 	//dd($id);
    //     $cards = $this->cards->all($id); 
    //     //Metodo All que obtiene todos los posts. Metodo declarado en Posts.php

    //     //dd($cards);
    //     //dd($id);

    //     dd($cards);

    //     return view('cards/index', compact('cards'));
    // }
    

    // public function show($id)
    // {
    //     //dd('hola');
    //     $card = $this->cards->find($id);

    //     //dd($client);

    //     return view('cards/show', compact('card'));
    // }

}
