<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kecepatan' => 'required|string',
            'harga' => 'required|numeric',
        ]);
    
        // Menyimpan data ke database
        Product::create([
            'nama_produk' => $validated['nama'],
            'kecepatan' => $validated['kecepatan'],
            'harga' => $validated['harga'],
        ]);
    
        return redirect()->route('product.index');
    }    

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect('/product');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product');
    }
}
