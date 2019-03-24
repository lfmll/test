{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::label('name','Nombre:')}}
	{{Form::text('name',$product->name,['class'=>'form-control','required'])}}	
</div>
<div class="form-group">
	{{Form::label('description','Description:')}}
	{{Form::text('description',$product->description,['class'=>'form-control'])}}
</div>
<div class="form-group">
	{{Form::label('price','Price:')}}
	{{Form::number('price',$product->price,['class'=>'form-control','step'=>'any','required'])}}
</div>
<div class="form-group text-right">
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}