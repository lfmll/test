@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Productos<small>-Lista</small></h2>
				<div class="col-sm-3">
					<a href="{{url('/product/create')}}" class="btn btn-info">
						Registrar Nuevo Producto
					</a>
				</div>
				<div class="card-body">
					<table class="table table-boreded table-responsivo-sm">
					<thead>
						<tr>
							<td>Nombre</td>							
							<td>Descripcion</td>
							<td>Precio</td>
							<td>Opciones</td>
						</tr>						
					</thead>
					<tbody>
						@foreach($product as $pro)
						<tr>
							<td>{{$pro->name}}</td>							
							<td>{{$pro->description}}</td>
							<td>{{$pro->price}}</td>
							<td>
							<a href="{{url('/product/'.$pro->id.'/edit')}}" class="btn btn-primary">Modificar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>				
				
			</div>
		</div>
		<div class="pagination text-center">
			{{$product->links()}}
		</div>
	</div>
@endsection