<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class cartCpntroller extends Controller
{
    public function index()
    {
        $carts = Cart::with(['customer', 'product'])->get();
        return view('admin.cart.index', compact('carts'), ['title' => 'Carts']);
    }

    // Delete Order
    public function destroy($id)
    {
        $carts = Cart::findOrFail($id);
        $carts->delete();

        return redirect()->route('carts.index')->with('success', 'carts deleted successfully!');
    }
}
