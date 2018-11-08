@extends('layouts.app2')
@section('title', 'Transacciones Tarjeta de Débito')

@section('content')
	<!-- TITULO --> 
    <div class="form-group col-sm-6 col-lg-4">
        @section('titulo', 'Datos de Transacciones')
    </div>

    <!-- Llamar a la vista de generadora de mensajes-->
    @include('common.sessions')
    <div class="card card-small py-3 mb-4 d-flex align-items-center">
		<form class="form-horizontal text-center" role="form">
		    <div class="card-body p-0 pb-3 text-center">
		        <table class="table mb-0">
		          	<thead class="bg-light" >
		                <tr role="row">
		                	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"></th>
		                  	<th tabindex="0" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ID Transacción</th>
		                  	<th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Monto Transferencia</th>
		                  	<th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Monto Inicial</th>
		                  	<th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Monto Final</th>
		                  	<th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tipo</th>

		                </tr>
		            </thead>
		            <tbody>
		            	
			            @foreach($debits as $debit)
			                {{-- <tr role="row" class="odd">
				                <td>
				                	{{ $debit->id }}
				                </td>
				                <td>
				                	${{ $debit->amount }}
				                </td>
				                <td>
				                	${{ $debit->initAmount }}
				                </td>
				                <td>
				                	${{ $debit->finalAmount }}
				                </td>
				                <td>
				                	{{ $debit->type }}
				                </td>
			              	</tr> --}}
			              	@if($debit->type == 'INGRESO')
				              	<tr role="row" class="odd">
				              		<td >
					                	<font color="blue"> + </font>
					                </td>
					                <td>
					                	<font color="blue">{{ $debit->id }}</font>
					                </td>
					                <td>
					                	<font color="blue">${{ $debit->amount }}</font>
					                </td>
					                <td>
					                	<font color="blue">${{ $debit->initAmount }}</font>
					                </td>
					                <td>
					                	<font color="blue">${{ $debit->finalAmount }}</font>
					                </td>
					                <td>
					                	<font color="blue">{{ $debit->type }}</font>
					                </td>
				              	</tr>
				             @endif
				             @if($debit->type == 'EGRESO')
				              	<tr role="row" class="odd">
				              		<td >
					                	<font color="red"> - </font>
					                </td>
					                <td >
					                	<font color="red">{{ $debit->id }} </font>
					                </td>
					                <td>
					                	<font color="red">${{ $debit->amount }}</font>
					                </td>
					                <td>
					                	<font color="red">${{ $debit->initAmount }}</font>
					                </td>
					                <td>
					                	<font color="red">${{ $debit->finalAmount }}</font>
					                </td>
					                <td>
					                	<font color="red">{{ $debit->type }}</font>
					                </td>
				              	</tr>
				             @endif

			              	
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
					    	<a class="btn btn-primary" class="col-sm-6" href="/home"><i class="far fa-caret-square-left"></i>  Volver atrás</a>
					    </th>

					  
					  </tr>
					</table>
					<!-- FINTABLA -->
			    </div>
		  	</div>
		</form>
	</div>



@endsection