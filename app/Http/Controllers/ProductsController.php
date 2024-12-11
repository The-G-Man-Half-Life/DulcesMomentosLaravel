<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products')); 
    }

    
    public function create()
    {
        return view('products.create'); 
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:products',
            'description' => 'nullable|string',
            'price' => 'required|numeric'
        ]);

        $Product = Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    
    public function show($id)
    {
        $Product = Product::findOrFail($id);

        return view('products.show', compact('Product')); 
    }

    
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product')); 
    }

    
    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $Product->id,
            'description' => 'nullable|string',
            'price' => 'required|numeric'
        ]);

        $Product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    
    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
