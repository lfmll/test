@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Sucursal<small>-Registro</small></h2>								
				
					@include('subsidiary.form',['subsidiary'=>$subsidiary,'url'=>'/subsidiary','method'=>'POST'])
				
			</div>
		</div>
	</div>
@endsection