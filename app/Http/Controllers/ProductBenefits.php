<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductBenefit;

class ProductBenefits extends Controller
{
    public function index(){
        $benefits = ProductBenefits::all();
        return view('benefits.index', compact('benefits'));
    }

    public function create(){
        return view('benefits.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'product_id' => 'required',
            'tipe_mobil' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'seat' => 'required',
        ]);

        ProductBenefits::create($validated);

        return redirect()->route('benefits.index');
    }

    public function edit(ProductBenefits $benefits){
        return view('benefits.edit', compact('benefit'));
    }

    public function update(Request $request, ProductBenefits $benefits){
        $validated = $request->validate([
            'product_id' => 'required',
            'tipe_mobil' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'seat' => 'required',
        ]);

        $benefits->update($validated);

        return redirect()->route('benefits.index');

    }

    public function destroy(ProductBenefits $benefits){
        $benefits->delete();

        return redirect()->route('benefits.index');
    }







}
