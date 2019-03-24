@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Sucursales<small>-Lista</small></h2>
				<div class="col-sm-3">
					<a href="{{url('/subsidiary/create')}}" class="btn btn-info">
						Registrar Nueva Sucursal
					</a>
				</div>
				<div class="card-body">
					<table class="table table-boreded table-responsivo-sm">
					<thead>
						<tr>
							<td>Nombre</td>							
							<td>Direccion</td>
							<td>Opciones</td>
						</tr>						
					</thead>
					<tbody>
						@foreach($subsidiary as $sub)
						<tr>
							<td>{{$sub->name}}</td>							
							<td>{{$sub->address}}</td>
							<td>
							<a href="{{url('/subsidiary/'.$sub->id.'/edit')}}" class="btn btn-primary">
								Modificar
							</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>								
			</div>
		</div>
	</div>
@endsection