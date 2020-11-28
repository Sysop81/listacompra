@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $id ) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h4>{{$producto[0]}}</h4><!-- Posicion cero del array $producto, contiene el nombre del producto -->
            <h6>Producto: {{$producto[1]}}</h6>
            <p><strong>Estado:</strong> Producto actualmente comprado.</p>
            <button type="button" class="btn btn-danger" id="pendienteCompra" name="pendienteCompra" value="1">Pendiente de compra</button>
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>
            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>


        </div>
    </div>
@stop
