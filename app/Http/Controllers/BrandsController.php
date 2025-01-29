<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    // Show all brands
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'),['title'=>'Brands']);
    }

    // Show form to create a new brand
    public function create()
    {
        return view('admin.brand.create',['title'=>'Add Brands']);
    }

    // Store a new brand
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
        ]);

        Brand::create([
            'name' => $request->name,
        ]);

        return redirect()->route('brand.index')->with('success', 'Brand added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.update', compact('brand'),['title'=>'Edt Brand']);
    }

    // Update brand
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name,' . $id,
        ]);

        $brand->update([
            'name' => $request->name,
        ]);

        return redirect()->route('brand.index')->with('success', 'Brand updated successfully!');
    }

    // Delete brand
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully!');
    }
}
