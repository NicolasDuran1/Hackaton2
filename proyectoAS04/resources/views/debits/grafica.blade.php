@extends('layouts.app2')
@section('title', 'Transacciones Tarjeta de Débito')

@section('content')
	<!-- TITULO --> 
    <div class="form-group col-sm-6 col-lg-4">
        @section('titulo', 'Datos de Transacciones')
    </div>

    <!-- Llamar a la vista de generadora de mensajes-->
    @include('common.sessions')
     <div class="card-body p-0 pb-3 text-left">
    	<h5 class="align-items-left">Cuenta Corriente</h5>
   	</div>
    <div class="card card-small py-3 mb-4 d-flex align-items-center">
		<form class="form-horizontal text-center" role="form">
		    <div class="card-body p-0 pb-3 text-center">
		        <table class="table mb-0">
		          	
		            <tbody>
		            	<?php $sum = 0; $sum1 = 0; ?>
			            @foreach($debits as $debit)
			              	@if($debit->type == 'INGRESO')
						   		<?php $sum += $debit->amount; ?>
						  
						   @else
						   		<?php $sum1 += $debit->amount; ?>
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
					    	<a class="btn btn-primary" class="col-sm-6" href="/mostrar/486258"><i class="far fa-caret-square-left"></i>  Volver atrás</a>
					    </th>

					    <div class="alert alert-success">
						        Total INGRESOS: ${{ $sum }}
						</div>
						<div class="alert alert-danger">
						        Total EGRESOS: ${{ $sum1 }}
						 </div>
					    
					    
					  </tr>

					  





					</table>
					<!-- FINTABLA -->
			    </div>
		  	</div>
		</form>
	</div>
	<div class="card card-small py-3 mb-4 d-flex align-items-center">
		<canvas id="chart-area" width="425" height="212" class="chartjs-render-monitor" style="display: block; height: 170px; width: 340px;"></canvas>
		<script>
		var ctx = document.getElementById("chart-area").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: ["Egresos","Ingresos"],
		        datasets: [{
		            label: 'Pesos',
		            data: [{{$egreso}},{{ $ingreso}} ],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
		</script>
	</div>
@endsection