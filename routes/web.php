<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use Illuminate\Http\Request;

Route::get('/productos', function () {
    $productos = Producto::all();
    return view('productos', compact('productos'));
});

Route::post('/productos', function (Request $request) {
    Producto::create($request->all());
    return redirect('/productos');
});
Route::delete('/productos/{id}', function ($id) {
    App\Models\Producto::destroy($id);
    return redirect('/productos');
});
Route::get('/', function () {
    return view('welcome');
});
