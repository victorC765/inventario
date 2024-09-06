<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $products = Producto::all();
        return view('auth.products', compact('products', 'categorias'));
    }
    public function store(Request $request)
    {
    try{
        $validatedData = $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'stock_actual' => 'required|integer|min:0',
            'categoria' => 'required',
            'fecha_llegada' => 'required|date',
        ]);
        $producto = new Producto();
        $producto->nombre_producto = $validatedData['nombre_producto'];
        $producto->descripcion = $validatedData['descripcion'];
        $producto->precio = $validatedData['precio'];
        $producto->stock_actual = $validatedData['stock_actual'];
        $producto->categoria_idCategoria = $validatedData['categoria'];
        $producto->fecha_llegada = $validatedData['fecha_llegada'];
        $producto->save();
        return redirect()->route('products.index')->with('success', 'Producto añadido correctamente');
    }catch(\Exception $e){
        return redirect()->route('products.index')->with('error', 'Error al añadir el producto: ' . $e->getMessage());
    }
}
public function destroy($id)
{
    try{
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }catch(\Exception $e){
        return redirect()->route('products.index')->with('error', 'Error al eliminar el producto: ' . $e->getMessage());
    }
}
}
