<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // List all categories
    public function index() {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'),['title'=>'Category']);
    }

    // Show add category form
    public function create() {
        return view('admin.category.add_category',['title'=>'Add Category']);
    }

    // Store new category
    public function store(Request $request) {
        $request->validate(['name' => 'required|string|max:255']);
        Category::create(['name' => $request->name]);
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    // Show edit form
    public function edit($id) {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        }
        return view('admin.category.update_category', compact('category'),['title'=>'Edit Category']);
    }

    // Update category
    public function update(Request $request, $id) {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        }
        $category->update(['name' => $request->name]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete category
    public function destroy($id) {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
