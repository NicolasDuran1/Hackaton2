@extends('layouts.app2')
@section('title', 'Cliente')

@section('content')
	<!-- TITULO --> 
    <div class="form-group col-sm-6 col-lg-4">
        @section('titulo', 'Detalle de Cliente')
    </div>

    <!-- Llamar a la vista de generadora de mensajes-->
    @include('common.sessions')
    <div class="card card-small py-3 mb-4 d-flex align-items-center">
		<form class="form-horizontal text-center" role="form">
			<div class="form-group">
				<strong class="text-muted d-block mb-2">Rut:</strong>	
				<p class="font-weight-normal">{{$client->rut}} - {{$client->dv}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Nombre Cliente:</strong>	
				<p class="font-weight-normal">{{$client->fullName}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Edad:</strong>	
				<p class="font-weight-normal">{{$client->age}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Formatted Rut:</strong>	
				<p class="font-weight-normal">{{$client->formattedRut}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Género:</strong>	
				<p class="font-weight-normal">{{$client->gender}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Region:</strong>	
				<p class="font-weight-normal">{{$client->region}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Nombre Cliente:</strong>	
				<p class="font-weight-normal">{{$client->fullName}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">subTipo:</strong>	
				<p class="font-weight-normal">{{$client->subType}}</p>
		  	</div>

		  	<div class="form-group">
				<strong class="text-muted d-block mb-2">Tipo:</strong>	
				<p class="font-weight-normal">{{$client->type}}</p>
		  	</div>

		  

		  <div class="form-group ">
		    <div class="form-group col-sm-10">
		    	<!-- TABLA -->
				<table style="width:35%"> <!-- Utilizacion de una tabla para mostrar los iconos-->
				  <tr>
				  	<!-- Volver Atras -->
				    <th>
				    	<a class="btn btn-primary" class="col-sm-6" href="/clients"><i class="far fa-caret-square-left"></i>  Volver atrás</a>
				    </th>
				  </tr>
				</table>
				<!-- FINTABLA -->
		    </div>
		  </div>
		</form>
	</div>
@endsection

		

		       