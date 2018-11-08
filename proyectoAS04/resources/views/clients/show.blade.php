@extends('layouts.app2')
@section('title', 'Cliente')

@section('content')
	<!-- TITULO --> 
    <div class="form-group col-sm-6 col-lg-4">
        @section('titulo', 'Productos de Cliente')
    </div>

    <!-- Llamar a la vista de generadora de mensajes-->
    @include('common.sessions')
    <div class="card card-small py-3 mb-4 d-flex align-items-center">
		<form class="form-horizontal text-center" role="form">
		    <div class="card-body p-0 pb-3 text-center">
		        <table class="table mb-0">
		          	<thead class="bg-light" >
		                <tr role="row">
		                  <th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ID</th>
		                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Monto Cuenta</th>
		                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tipo</th>
		                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Monto Límite</th>
		                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Acciones</th>

		                </tr>
		            </thead>
		            <tbody>
			            @foreach($client as $c)
			                <tr role="row" class="odd">
				                <td>
				                	{{ $c->id }}
				                </td>
				                <td>
				                	{{ $c->amount }}
				                </td>
				                <td>
				                	{{ $c->type }}
				                </td>
				                <td>
				                	{{ $c->limitAmount }}
				                </td>
				                @if($c->type == 'TDC')
					                <td>
					                	<a class="col-sm-6" target="_blank" href="">
			                            	<i class="far fa-eye"></i>
			                                Credito
			                            </a>
					                </td>
					            @else
					            	<td>
					                	<a class="col-sm-6" target="_blank" href="">
			                            	<i class="far fa-eye"></i>
			                                Debito
			                            </a>
					                </td>
					            @endif
			              	</tr>
			          	@endforeach
		          </tbody>
		        </table>
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

		

		       