@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Sucursal<small>-Edición</small></h2>								
				<div class="card-body">
					@include('subsidiary.form',['subsidiary'=>$subsidiary,'url'=>'/subsidiary/'.$subsidiary->id,'method'=>'PATCH'])
				</div>
			</div>
		</div>
	</div>
@endsection