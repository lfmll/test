@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Producto<small>-Registro</small></h2>								
				
					@include('product.form',['product'=>$product,'url'=>'/product','method'=>'POST'])
				
			</div>
		</div>
	</div>
@endsection