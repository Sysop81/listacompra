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

    //Array con los productos
    //Movido a DatabaseSeeder para alimentar a la BD
}
