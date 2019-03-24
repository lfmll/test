@extends("layouts.app")
@section("content")
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Producto<small>-Edición</small></h2>									
				<div class="card-body">
					@include('product.form',['product'=>$product,'url'=>'/product/'.$product->id,'method'=>'PATCH'])
				</div>
			</div>
		</div>
	</div>
@endsection