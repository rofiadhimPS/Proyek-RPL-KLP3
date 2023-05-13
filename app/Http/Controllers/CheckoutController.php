<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $checkouts = Checkout::all();
        $title = 'Pesanan';
        return view('admin_pesanan', ['checkouts' => $checkouts, 'title' => $title]);
    }

    public function create(Request $request){

        $product = Product::findOrFail($request->product_id);
        return view('checkouts.create', compact('product'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'tanggal_pesan' => 'required',
            'lokasi_penjemputan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_transfer' => 'required',
            'is_paid' => 'required',
        ]);
        Checkout::create($validated);
        return redirect()->route('checkouts.index');

    }

    public function edit(Checkout $checkout){
        return view('checkouts.edit', compact('checkout'));
    }

    public function update(Request $request, Checkout $checkout){
        $validated = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'tanggal_pesan' => 'required',
            'lokasi_penjemputan' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_transfer' => 'required',
            'is_paid' => 'required',
        ]);
        $checkout->update($validated);

        return redirect()->route('checkouts.index');
    }

    public function destroy(Checkout $checkout){
        $checkout->delete();

        return redirect()->route('checkouts.index');
    }


}
