<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();
        return view('admin.attributes.index', compact('attributes'),['title' => 'Navbar Name']);
    }

    public function create()
    {
        return view('admin.attributes.create',['title' => 'Add Navbar Name']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:attributes',
        ]);

        Attribute::create(['name' => $request->name]);

        return redirect()->route('attributes.index')->with('success', 'Attribute added successfully!');
    }

    public function edit($id)
    {
        $attribute = Attribute::find($id);
        return view('admin.attributes.update', compact('attribute'),['title' => 'Edit Navbar Name']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:attributes,name,' 
        ]);
        $attribute = Attribute::find($id);
        $attribute->update(['name' => $request->name]);
   
        return redirect()->route('attributes.index')->with('success', 'Attribute updated successfully!');

    }

    public function destroy($id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute->delete();

        return redirect()->route('attributes.index')->with('success', 'Attribute deleted successfully!');
    }
}
