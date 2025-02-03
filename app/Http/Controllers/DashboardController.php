<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;


class DashboardController extends Controller
{
   public function index()
   {
      $customers = Customer::all()->count(); // Count all customers
      $orders = Order::all()->count(); // Count all orders
      $deliveredOrders = Order::where('status', 'delivered')->count();  // Count all delivered orders
      $totalSales = Payment::sum('amount'); // Sum total sales

      $startOfWeek = Carbon::now()->startOfWeek();  // Start of the current week 
      $endOfWeek = Carbon::now()->endOfWeek();      // End of the current week 
      
      // Orders ko filter karna jo current week mein aaye
      $ordersThisWeek = Order::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

      return view('layout.main', compact('deliveredOrders', 'customers', 'orders','totalSales','ordersThisWeek'), ['title' => 'Dashboard']);
   }
}
