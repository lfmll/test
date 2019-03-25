@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Ventas<small>-Lista</small></h2>								
				<table class="table table-boreded table-responsivo-sm">
					<thead>
						<tr>
							<td>Fecha</td>			
							<td>Cliente</td>
							<td>Usuario</td>
							<td>Sucursal</td>
							<td>Total</td>
							<td>Opciones</td>
						</tr>						
					</thead>
					<tbody>
						@foreach($sale as $sal)
						<tr>
							<td>{{$sal->created_at}}</td>							
							<td>{{$sal->client->name}}</td>
							<td>{{$sal->user->name}}</td>
							<td>{{$sal->subsidiary->name}}</td>
							<td>{{$sal->total}}</td>
							<td>
							
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>				
			</div>
		</div>
		<div class="text-center">
			{{$sale->links()}}
		</div>
	</div>
@endsection