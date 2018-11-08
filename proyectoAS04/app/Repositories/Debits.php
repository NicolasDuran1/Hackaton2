<?php  

namespace App\Repositories;
use GuzzleHttp\Client;

//Clase encargada de obtener los posts para los distintos metodos del controlador
Class Debits
{
	//Envia los posts dela API al controlador
	public function all($id)
	{
		$client = new Client([
        // Base URI is used with relative requests
        	'base_uri' => 'apifintech-team2.3it.cl/hackathon',
    	]);
		//dd($id);
	    $response = $client->request('GET', "hackathon/tef/history/{$id}"); 

	   	//dd($response);
	    return json_decode($response->getBody()->getContents()); //Se retornan al controlador

	}

	//Busca una ID especifica de un post y la envia al Controlador

	// public function find($id)
	// {
	// 	$client = new Client([
 //            'base_uri' => 'apifintech-team2.3it.cl/hackathon',
 //        ]);

 //        $response = $client->request('GET', "hackathon/clients/{$id}/products"); 

 //        //dd($response);

 //        return json_decode($response->getBody()->getContents()); 
	// }
}