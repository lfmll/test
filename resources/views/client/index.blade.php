@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">			
				<h2 class="card-title">Clientes<small>-Lista</small></h2>
				<div class="col-sm-3">
					<a href="{{url('/client/create')}}" class="btn btn-info">
						Registrar Nuevo Cliente
					</a>
				</div>
				<div class="card-body">
					<table class="table table-boreded table-responsivo-sm">
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Nit</td>
							<td>Correo</td>
							<td>Direccion</td>
							<td>Opciones</td>
						</tr>						
					</thead>
					<tbody>
						@foreach($client as $cl)
						<tr>
							<td>{{$cl->name}}</td>
							<td>{{$cl->nit}}</td>
							<td>{{$cl->email}}</td>
							<td>{{$cl->address}}</td>
							<td>
								<div class="btn-group">
									<a href="{{url('/client/'.$cl->id.'/edit')}}" class="btn btn-primary">
										Modificar
									</a>
									<a>
										@include('client.delete',['client'=>$cl])
                    				</a>
								</div>		
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>				
				<div class="text-center">
					{{$client->links()}}
				</div>
			</div>
		</div>
	</div>
@endsection