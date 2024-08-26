<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Producto::all();
        return view('auth.products', compact('products'));
    }
}
