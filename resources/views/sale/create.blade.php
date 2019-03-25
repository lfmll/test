@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Venta<small>-Registro</small></h2>								
				
					@include('sale.form',['sale'=>$sale,'url'=>'/sale','method'=>'POST'])
				
			</div>
		</div>
	</div>
@endsection