<?php  

namespace App\Repositories;
use GuzzleHttp\Client;

//Clase encargada de obtener los posts para los distintos metodos del controlador
Class Transferencias
{
	//Envia los posts dela API al controlador
	public function trans()
	{
		$client = new Client([
        // Base URI is used with relative requests
        	'base_uri' => 'apifintech-team2.3it.cl/hackathon',
    	]);
		//dd($id);
	    $response = $client->request('POST', "hackathon/tef"); 

	   	dd($response);
	    return json_decode($response->getBody()->getContents()); //Se retornan al controlador

	}
}