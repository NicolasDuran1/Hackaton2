@extends('layouts.app2')
@section('title', 'Clientes')

@section('content') 
	<!-- TITULO -->
	<div class="form-group ">
	    @section('titulo', 'Clientes')
	</div>
	<!-- Llamar a la vista de generadora de mensajes-->
	@include('common.sessions')

	<!-- Crear Facultad -->
    <div class="card card-small py-3 mb-4 d-flex align-items-center">
    	<div class="card-body container-fluid">
    		{!! Form::open(['method' => 'GET', 'url' => '/clients', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
		        <div class="input-group">
		            <input type="text" class="form-control" name="search" placeholder="Buscar...">
		              	<span class="input-group-append">
		                  	<button class="btn btn-secondary" type="submit">
		                      	<i class="fa fa-search"></i>
		                  	</button>
		              	</span>
		        </div>
	        {!! Form::close() !!}
         	<br>
        	<br>
		    <div class="col">
				<div class="container">
					<div class="card-body p-0 pb-3 text-center">
			          	<table class="table mb-0">
			              	<thead class="bg-light" >
			                	<tr role="row">
				                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Rut</th>
				                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nombre Cliente</th>
				                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Edad</th>
				                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Género</th>
				                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Región </th>
				                  	@if($tipo_cliente == 1)
				                  	@else
				                  		<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tipo</th>
				                  	@endif
				                  	@if($tipo_cliente == 1 || $tipo_cliente == 2)
				                    @else
				                  		<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tipo</th>
				                  	@endif
				                  	<th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Acciones</th>
			                	</tr>
			             	</thead>
			             	<tbody>
			              	@foreach ($clients as $client)
			                  	<tr role="row" class="odd">
			                  		<td>
			                        	{{ $client->rut }}-{{ $client->dv }}
			                        </td>
			                        <td>
			                        	{{ $client->fullName }}
			                        </td>
			                        <td>
			                        	{{ $client->age }}
			                        </td>
			                        <td>
			                        	{{ $client->gender }}
			                        </td>
			                        <td>
			                        	{{ $client->region }}
			                        </td>
			                        @if($client->subType == Null)
			                        @else
				                        <td>
				                        	{{ $client->subType }}
				                        </td>
				                    @endif
				                    @if($tipo_cliente == 1 || $tipo_cliente == 2)
				                    @else
				                        <td>
				                        	{{ $client->type }}
				                        </td>
				                    @endif
			                        <td>
			                          	<a class="col-sm-6" target="_blank" href="/clients/{{$client->rut}}">
			                              <i class="far fa-eye">
			                              </i>
			                                Ver más
			                              </a>
			                        </td>
			                  	</tr>
			             	@endforeach
			              	</tbody>
			          	</table>
			        </div>
			    </div>
			</div>
		</div>
	</div>

@endsection



		
