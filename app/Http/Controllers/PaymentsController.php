<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::with('orders')->get();
        return view('admin.payment.index', compact('payments'), ['title' => 'Payments']);
    }

    // Delete Order
    public function destroy($id)
    {
        $payments = Payment::findOrFail($id);
        $payments->delete();

        return redirect()->route('payments.index')->with('success', 'Order deleted successfully!');
    }
}
