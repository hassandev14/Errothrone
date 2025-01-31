<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stock;

class stockController extends Controller
{
    public function index()
    {
        $stocks = Stock::with('product')->get();
        return view('admin.stock.index', compact('stocks'), ['title' => 'Stocks']);
    }
}
