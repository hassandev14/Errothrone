<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function generateInvoice($orderId)
    {
        // Fetch the order along with customer and product details
        $order = Order::with(['customer', 'products'])->findOrFail($orderId);

        // You can format the data as needed, here we pass it to the view
        $pdf = PDF::loadView('invoices.invoice', compact('order'));

        // Return the generated PDF as a download
        return $pdf->download('invoice_' . $order->id . '.pdf');
    }
}
