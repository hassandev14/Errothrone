<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('admin.order.index', compact('orders'), ['title' => 'Orders']);
    }

    // Delete Order
    public function destroy($id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
