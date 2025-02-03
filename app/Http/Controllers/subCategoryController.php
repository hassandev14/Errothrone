<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    // Show sub-categories for a specific category
    public function index()
    {
        $sub_category = SubCategory::all();
        $categories = Category::all();
        return view('admin.category.sub_category', compact('sub_category', 'categories'),['title'=>'Sub Category']);
    }

    public function create() {

        $categories = Category::all();
        return view('admin.category.add_sub_category', compact('categories'), ['title'=>'Add Sub Category']);
    }

    // Store a new sub-category
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'nullable',
        ]);

        SubCategory::create($request->all());
        return redirect()->route('sub_categories.index', $request->category_id);
    }

    // Other methods (edit, delete) will go here...
}

