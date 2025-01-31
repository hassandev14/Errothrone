<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order_reurn;

class orderReturnController extends Controller
{
    public function index()
    {
        $order_return = Order_reurn::with('customer')->get();
        return view('admin.order.order_return', compact('order_return'), ['title' => 'Orders']);
    }
}
