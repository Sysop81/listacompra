<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function getIndex(){
        return view('productos.index', array('arrayProductos' => Producto::all()));
    }

    public function getShow($id){
        return view('productos.show', array('producto' => Producto::findOrFail($id)));
    }

    public function getCreate(){
        return view('productos.create');
    }

    public function getEdit($id){
        return view('productos.edit', array('producto' => Producto::findOrFail($id)));
    }

    public function postCreate(Request $request){
        //Creo un nuevo producto y lo cargo con los valores del request
        $producto = new Producto();

        //Cargamos el producto con los valores del objeto request
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('categoria');
        $producto->save();

        //Hacemos la redireccion a /productos
        return redirect('/productos');

    }

    public function putEdit(Request $request){

        //Obtenemos el id del producto a modificar
        $id = $request->input('id');

        $producto = Producto::findOrFail($id); //Cargamos el objeto con los datos de la BBDD
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('categoria');
        $producto->save();

        //Despues de actualizar el producto redirigimos a la vista
        return redirect('/productos/show/'.$id);
    }

    //Array con los productos
    //Movido a DatabaseSeeder para alimentar a la BD
}
