<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:products',
            'icon' => 'required',
            'price' => 'required',
            'is_tersedia' => 'required',
        ]);
        Product::create($validated);

        return redirect()->route('products.index');

    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    
    public function update(Request $request, Product $product){
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:products,slug' . $product->id,
            'icon' => 'required',
            'price' => 'required',
            'is_tersedia' => 'required',
        ]);
        
        $product->update($validated);
        
        return redirect()->route('products.index');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index');
    }



}
