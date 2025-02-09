<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
            'name'           => 'required|string|max:255',
            'description'    => 'required',
            'price'          => 'required|numeric',
            'brand_ids'      => 'required|array',
            'brand_ids.*'    => 'exists:brands,id',
            'category_ids'   => 'required|array',
            'category_ids.*' => 'exists:categories,id',
            'sub_category_ids' => 'nullable|array',
            'sub_category_ids.*' => 'exists:sub_category,id', // Ensure this table name is correct
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a folder path for storing the image inside 'public/admin_images/brands'
            $folderPath = public_path('admin_images/brands');

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
    
        // Create the Product
        $product = Product::create([
            'name'        => $validated['name'],
            'price'       => $validated['price'],
            'description' => $validated['description'],
            'image_name' =>  $imagePath,
        ]);

        // Attach Categories and Subcategories to Product via category_product pivot table
        if (isset($validated['category_ids']) && count($validated['category_ids']) > 0) {
            foreach ($validated['category_ids'] as $categoryId) {
                foreach ($validated['sub_category_ids'] as $subCategoryId) {
                    // Insert into category_product pivot table with both category_id and sub_category_id
                    DB::table('category_product')->insert([
                        'product_id'     => $product->id,
                        'category_id'    => $categoryId,
                        'sub_category_id'=> $subCategoryId, // Assuming there's a column for sub_category_id
                        'brand_id'    => $validated['brand_ids'][0],
                        'created_at'     => now(),
                        'updated_at'     => now(),
                    ]);
                }
            }
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
