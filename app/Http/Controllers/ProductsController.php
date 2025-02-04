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
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
            'category_ids' => 'required|array|min:1', // Ensure at least one value is selected
            'category_ids.*' => 'string', // Make sure each selected value is a string
            'sub_category_ids' => 'required|array|min:1', // Ensure at least one value is selected
            'sub_category_ids.*' => 'string', // Make sure each selected value is a string
            'brand_ids' => 'required|array|min:1', // Ensure at least one value is selected
            'brand_ids.*' => 'string', // Make sure each selected value is a string
        ]);
        // Convert the arrays to comma-separated values
        $category_ids = implode(',', $request->input('category_ids'));
        $sub_category_ids = implode(',', $request->input('sub_category_ids'));
        $brand_ids = implode(',', $request->input('brand_ids'));
        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a folder path for storing the image inside 'public/admin_images/products'
            $folderPath = public_path('admin_images/products');

            // Check if the folder exists, if not, create it
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Create the folder with proper permissions
            }

            // Generate a unique name for the image to avoid overwriting
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the folder
            $image->move($folderPath, $imageName);

            // Store the relative path of the image in the database (relative to the 'public' directory)
            $imagePath = 'admin_images/products/' . $imageName;
        } else {
            // If no image is uploaded, set the path to null or handle accordingly
            $imagePath = null;
        }

        // Store the product in the database
        Product::create([
            'name' => $request->name,
            'category_id' => $category_ids, // Comma-separated category IDs
            'sub_category_id' => $sub_category_ids, // Comma-separated sub-category IDs
            'brand_id' => $brand_ids, // Comma-separated brand IDs
            'price' => $request->price,
            'description' => $request->description,
            'image_name' => $imagePath,
        ]);

        // Redirect to products index with success message
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
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
