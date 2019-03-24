{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::label('name','Nombre:')}}
	{{Form::text('name',$subsidiary->name,['class'=>'form-control','required'])}}	
</div>
<div class="form-group">
	{{Form::label('address','Direccion:')}}
	{{Form::textarea('address',$subsidiary->address,['class'=>'form-control'])}}
</div>
<div class="form-group text-right">
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}