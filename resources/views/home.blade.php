@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido!
                </div>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>
                            <a href="{{url("/client")}}">Ver Clientes</a>
                        </td>
                        <td>
                            <a href="{{url("/subsidiary")}}">Ver Sucursales</a>
                        </td>
                        <td>
                            <a href="{{url("/product")}}">Ver Productos</a>
                        </td>
                        <td>
                            <a href="{{url("/sale")}}">Ver Ventas</a>
                        </td>
                        <td>
                            <a href="{{url("/sale/create")}}">Realizar Venta</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
