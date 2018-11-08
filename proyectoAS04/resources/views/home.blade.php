@extends('layouts.app2')

@section('content')

<div class="row">
  
	<div  class="col-md-6">

		<div class="alert alert-warning alert-dismissable">
		  
		  <strong>Nombre: {{Auth::user()->nombre}} </strong> 
		</div>
  		

  		
	</div>



  	<div class="col-md-6">
  		<div class="alert alert-success">Ingresos:  </div> <br>
  		<div class="alert alert-danger">Egresos:</div>
  	</div>
</div>





@endsection
