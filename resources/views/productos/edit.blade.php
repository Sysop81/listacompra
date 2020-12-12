@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Modificar producto
              </div>
              <div class="card-body" style="padding:30px">

                 {{-- TODO: Abrir el formulario e indicar el método POST --}}
              <form name="formularioAñadirProducto" id="formularioAñadirProducto" action="{{ url('/productos/edit') }}" method="POST">
                {{method_field('PUT')}}
                @csrf

                <!-- Pasamos el id mediante el campo oculto -->
                <input type="hidden" name="id" id="id" value="{{ $producto->id }}">

                 <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" value="{{ $producto->categoria }}" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="text" name="imagen" id="imagen" value="{{ $producto->imagen }}" class="form-control"> <!--Tipo texto porque usamos url para las imagenes -->
                 </div>


                 <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{ $producto->descripcion }}</textarea>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar producto
                    </button>
                 </div>


                </form>

              </div>
           </div>
        </div>
     </div>
    @stop
