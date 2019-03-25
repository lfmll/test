{!! Form::open(['url' => $url, 'method' => $method]) !!}

<div class="form-group">
	{{Form::label('client','Clientes:')}}
	{{Form::select('$client_id',$clients,null,['class'=>'form-control','required'])}}	
</div>
<div class="form-group">
	{{Form::label('product','Productos:')}}
	{{Form::select('$product_id',$products,null,['class'=>'form-control','required','multiple'=>'multiple'])}}
</div>
<div class="form-group text-right">
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}