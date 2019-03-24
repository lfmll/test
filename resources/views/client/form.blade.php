{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::label('name','Nombre:')}}
	{{Form::text('name',$client->name,['class'=>'form-control','required'])}}	
</div>
<div class="form-group">
	{{Form::label('nit','Nit:')}}
	{{Form::text('nit',$client->nit,['class'=>'form-control','required'])}}
</div>
<div class="form-group">
	{{Form::label('email','Correo:')}}
	{{Form::text('email',$client->email,['class'=>'form-control','required'])}}
</div>
<div class="form-group">
	{{Form::label('address','Direccion:')}}
	{{Form::textarea('address',$client->address,['class'=>'form-control'])}}
</div>
<div class="form-group text-right">
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}