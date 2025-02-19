<?php
namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // List all categories
    public function index()
    {
        $categories = Category::with('attributes')->get();
                
        return view('admin.category.category', compact('categories'), ['title' => 'Category']);
    }

    // Show add category form
    public function create()
    {
        $attributes = Attribute::all();
        return view('admin.category.add_category', compact('attributes'), ['title' => 'Add Category']);
    }

    // Store new category
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'attribute_ids.*' => 'exists:attributes,id',
        ]);

        // // Default next sort order fetch karein
        // $sortOrder = $request->sort_order ?? (Category::max('sort_order') + 1);

        // // Agar user sort_order = 1 dal raha hai, to baki categories ka sort_order shift karein
        // if ($sortOrder == 1) {
        //     Category::where('sort_order', '>=', 1)->increment('sort_order');
        // } else {
        //     // Agar same sort_order exist karta hai to usko adjust karein
        //     while (Category::where('sort_order', $sortOrder)->exists()) {
        //         $sortOrder++;
        //     }
        // }

        $category = Category::create([
            'name' => $request->name,
        ]);
        
        $categoryId = $category->id;
        DB::table('attribute_category')->insert([
            'category_id'  => $categoryId,
            'attribute_id' => $request['attribute_ids'][0] ?? null, // NULL if brand not selected
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $attributes = DB::table('attributes')->get(); // Fetch all attributes
        $selectedAttributes = DB::table('attribute_category')
                                ->where('category_id', $id)
                                ->pluck('attribute_id')
                                ->toArray();

        return view('admin.category.update_category', compact('category', 'attributes', 'selectedAttributes'),['title' => 'Update Category']);
    }

    // Update category
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (! $category) {
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // $newSortOrder = $request->sort_order;
        // $oldSortOrder = $category->sort_order;

        // // Agar sort_order change ho raha hai
        // if ($newSortOrder != $oldSortOrder) {

        //     if ($newSortOrder == 1) {
        //         // Agar new sort_order = 1 hai, to baki categories ko shift karein
        //         Category::where('sort_order', '>=', 1)->increment('sort_order');
        //     } else {
        //         // Agar koi category is new sort_order par exist karti hai, to adjust karein
        //         while (Category::where('sort_order', $newSortOrder)->exists()) {
        //             $newSortOrder++;
        //         }
        //     }
        // }

        // Category update karein
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete category
    public function destroy($id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect()->route('categories.index')->with('error', 'Category not found!');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
