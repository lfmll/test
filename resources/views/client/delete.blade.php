{!! Form::open(['url' => '/client/'.$client->id, 'method' => 'DELETE', 'onsubmit'=>'return confirm("Esta seguro de eliminar este registro?")']) !!}
<input type="submit" class="btn btn-danger" value="Eliminar">
{!! Form::close() !!}