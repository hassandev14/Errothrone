<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_item;

class Order_itemsController extends Controller
{
    public function index()
    {
        $order_items = Order_item::with('user')->get();
        return view('admin.order_item.index', compact('order_items'), ['title' => 'Order Items']);
    }

    // Delete Order
    public function destroy($id)
    {
        $order_items = Order_item::findOrFail($id);
        $order_items->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
