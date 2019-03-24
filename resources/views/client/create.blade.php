@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Clientes<small>-Registro</small></h2>								
				
					@include('client.form',['client'=>$client,'url'=>'/client','method'=>'POST'])
				
			</div>
		</div>
	</div>
@endsection