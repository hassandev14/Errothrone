<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->get();
        return view('admin.product.index', compact('products'), ['title' => 'Products']);
    }

    // Show form to create a new brand
    public function create()
    {
        $products = Product::all();  // Get all products
        $categories = Category::all();  // Get all categories
        $brands = Brand::all();  // Get all brand
        return view('admin.product.create', compact('products', 'categories', 'brands'), ['title' => 'Add Products']);
    }

    // Store a new brand
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'price'         => 'required|numeric',
            'brand_id'      => 'required|exists:brands,id',
            'categories'    => 'required|array',
            'categories.*'  => 'exists:categories,id',
            'subcategories' => 'nullable|array',
            'subcategories.*' => 'exists:sub_categories,id',  // ya 'subcategories.*' => 'exists:sub_categories,id' agar table ka naam sub_categories ho
        ]);

        // Product create karna
        $product = Product::create([
            'name'     => $validated['name'],
            'price'    => $validated['price'],
            'brand_id' => $validated['brand_id'],
            // agar koi aur fields hain to unhe bhi include karein
        ]);

        // Many-to-many relationship update karna for categories
        $product->categories()->attach($validated['categories']);

        // Agar subcategories select hui hain to attach karein
        if(isset($validated['subcategories'])) {
            $product->subcategories()->attach($validated['subcategories']);
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        // Get the brand to edit, along with its associated category
        $products = Product::findOrFail($id);

        // Get all categories for the dropdown
        $categories = Category::all();

        // Get all brand
        $brands = Brand::all();
        return view('admin.product.update', compact('brands', 'categories', 'products'), ['title' => 'Edit Products']);
    }

    // Update brand
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $folderPath = public_path('admin_images/products');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'admin_images/products/' . $imageName;
        } else {
            // Keep the old image if no new one is provided
            $imagePath = $product->image_name;
        }

        // Update the brand
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'description' => $request->description,
            'image_name' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Products updated successfully!');
    }

    // Delete brand
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Products deleted successfully!');
    }
}
