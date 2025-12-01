<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest; // Import Request baru
use App\Http\Requests\UpdateProductRequest; // Import Request baru
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. INDEX: Menampilkan daftar semua produk
    public function index()
    {
        $products = Product::latest()->get();
            return view('products.index', compact('products'));
    }

    // 2. CREATE: Menampilkan form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // 3. STORE: Menyimpan produk baru ke database
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // (SHOW diabaikan karena jarang dipakai di CRUD sederhana)

    // 4. EDIT: Menampilkan form edit dengan data produk lama
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // 5. UPDATE: Mengupdate produk yang sudah ada di database
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // 6. DESTROY: Menghapus produk dari database
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
