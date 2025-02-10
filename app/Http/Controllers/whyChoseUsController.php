<?php
namespace App\Http\Controllers;

use App\Models\WhyChoseUs;
use Illuminate\Http\Request;

class whyChoseUsController extends Controller
{
    public function index()
    {
        $chose_us = WhyChoseUs::all();
        return view('admin.chose_us.index', compact('chose_us'), ['title' => 'Why Chose Us']);

    }
    public function create()
    {
        return view('admin.chose_us.create', ['title' => 'Add Why Chose Us']);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'description' => 'required',
        ]);
        
        WhyChoseUs::create($request->all());

        return redirect()->route('chose_us.index')->with('success', 'Why Chose Us added successfully');
    }
}
