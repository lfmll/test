@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Clientes<small>-Edición</small></h2>									
				<div class="card-body">
					@include('client.form',['client'=>$client,'url'=>'/client/'.$client->id,'method'=>'PATCH'])
				</div>
			</div>
		</div>
	</div>
@endsection