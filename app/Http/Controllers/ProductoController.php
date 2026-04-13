<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Listar todos los productos
    public function index()
    {
        return Producto::all();
    }

    // Crear producto
    public function store(Request $request)
    {
        return Producto::create($request->all());
    }

    // Mostrar un producto
    public function show($id)
    {
        return Producto::findOrFail($id);
    }

    // Actualizar producto
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return $producto;
    }

    // Eliminar producto
    public function destroy($id)
    {
        Producto::destroy($id);
        return response()->json(["mensaje" => "Eliminado"]);
    }
}