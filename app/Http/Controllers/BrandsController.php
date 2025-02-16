<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandsController extends Controller
{
    // Show all brands
    public function index()
    {
        $brands = Brand::with('category')->get();
        return view('admin.brand.index', compact('brands'), ['title' => 'Brands']);
    }

    // Show form to create a new brand
    public function create()
    {
        $brands = Brand::all();  // Get all brands
        $categories = Category::all();  // Get all categories
        return view('admin.brand.create', compact('brands', 'categories'), ['title' => 'Add Brands']);
    }

    // Store a new brand
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
            'desc' => 'nullable|string',  // Validate the description field
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a folder path for storing the image inside 'public/admin_images/brands'
            $folderPath = public_path('storage/admin_images/brands');

            // Check if the folder exists, if not, create it
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Create the folder with proper permissions
            }

            // Generate a unique name for the image to avoid overwriting
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the folder
            $image->move($folderPath, $imageName);

            // Store the relative path of the image in the database (relative to the 'public' directory)
            $imagePath = 'storage/admin_images/brands/' . $imageName;
        } else {
            // If no image is uploaded, set the path to null or handle accordingly
            $imagePath = null;
        }
        // Create a new brand record in the database
        Brand::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'image_name' => $imagePath,
        ]);
        // Redirect to brand index with success message
        return redirect()->route('brands.index')->with('success', 'Brand added successfully!');
    }


    // Show edit form
    public function edit($id)
    {
        // Get the brand to edit, along with its associated category
        $brand = Brand::findOrFail($id);

        // Get all categories for the dropdown
        $categories = Category::all();

        return view('admin.brand.update', compact('brand', 'categories'), ['title' => 'Edit Brand']);
    }

    // Update brand
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $brand = Brand::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $folderPath = public_path('storage/admin_images/brands');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'storage/admin_images/brands/' . $imageName;
        } else {
            // Keep the old image if no new one is provided
            $imagePath = $brand->image_name;
        }

        // Update the brand
        $brand->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'image_name' => $imagePath,
        ]);

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    // Delete brand
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
