<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route :: prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginVerify'])->name('login.verify');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerVerify']);
});
Route ::middleware('auth')->group(function(){
    Route::get('home', function () {
        return view('auth.dashboard');
    })->name('home');
//Clientes rutas
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
//Productos rutas
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
//Ventas rutas
Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');

//cerrar sesion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});