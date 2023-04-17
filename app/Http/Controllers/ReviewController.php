<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $validated = $request-> validate([
            'user_id' => 'required',
            'rating' => 'required',
            'komentar' => 'required',
        ]);

        Product::create($validated);
        return redirect()->route('products.index');
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    
    public function update(Request $request, Product $product){
        $validated = $request->validate([
            'user_id' => 'required',
            'rating' => 'required',
            'komentar' => 'required',
        ]);
        $product->update($validated);
        return redirect()->route('products.index');

    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index');
    }

}
