<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $products   = Product::all();  // Get all products
        $categories = Category::all(); // Get all categories
        $brands     = Brand::all();    // Get all brand
        return view('admin.product.create', compact('products', 'categories', 'brands'), ['title' => 'Add Products']);
    }

    // Store a new brand
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name'               => 'required|string|max:255',
            'description'        => 'required',
            'short_desc'         => 'required',
            'price'              => 'required|numeric',
            'brand_ids'          => 'array',
            'brand_ids.*'        => 'exists:brands,id',
            'category_ids'       => 'array',
            'category_ids.*'     => 'exists:categories,id',
            'sub_category_ids'   => 'nullable|array',
            'sub_category_ids.*' => 'exists:sub_category,id', // Ensure this table name is correct
            'image'              => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a folder path for storing the image inside 'public/admin_images/brands'
            $folderPath = public_path('storage/admin_images/products');

            // Check if the folder exists, if not, create it
            if (! file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Create the folder with proper permissions
            }

            // Generate a unique name for the image to avoid overwriting
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the folder
            $image->move($folderPath, $imageName);

            // Store the relative path of the image in the database (relative to the 'public' directory)
            $imagePath = 'storage/admin_images/products/' . $imageName;
        } else {
            // If no image is uploaded, set the path to null or handle accordingly
            $imagePath = null;
        }

        // Create the Product
        $product = Product::create([
            'name'        => $validated['name'],
            'price'       => $validated['price'],
            'description' => $validated['description'],
            'short_desc' => $validated['short_desc'],
            'image_name'  => $imagePath,
        ]);

        // Attach Categories and Subcategories to Product via category_product pivot table
        if (!empty($validated['category_ids'])) {
            foreach ($validated['category_ids'] as $categoryId) {
                if (!empty($validated['sub_category_ids'])) {
                    foreach ($validated['sub_category_ids'] as $subCategoryId) {
                        // Insert with sub_category_id
                        DB::table('category_product')->insert([
                            'product_id'      => $product->id,
                            'category_id'     => $categoryId,
                            'sub_category_id' => $subCategoryId, // Sub-category (if available)
                            'brand_id'        => $validated['brand_ids'][0] ?? null, // NULL if brand not selected
                            'created_at'      => now(),
                            'updated_at'      => now(),
                        ]);
                    }
                } else {
                    // Insert without sub_category_id
                    DB::table('category_product')->insert([
                        'product_id'  => $product->id,
                        'category_id' => $categoryId,
                        'brand_id'    => $validated['brand_ids'][0] ?? null, // NULL if brand not selected
                        'created_at'  => now(),
                        'updated_at'  => now(),
                    ]);
                }
            }
        }
        
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $products   = Product::with(['categories', 'subcategories', 'brands'])->findOrFail($id);
        $categories = Category::with('subcategories')->get();
        $brands     = Brand::all();

        $selectedCategories    = $products->categories ? $products->categories->pluck('id')->toArray() : [];
        $selectedSubcategories = $products->subcategories ? $products->subcategories->pluck('id')->toArray() : [];
        $selectedBrands        = $products->brands ? $products->brands->pluck('id')->toArray() : [];
        return view('admin.product.update', compact('products', 'categories', 'brands', 'selectedCategories', 'selectedSubcategories', 'selectedBrands'), ['title' => 'Edit Products']);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'               => 'required|string|max:255',
            'category_ids'       => 'required|array',       
            'category_ids.*'     => 'exists:categories,id', 
            'sub_category_ids'   => 'nullable|array',
            'sub_category_ids.*' => 'exists:sub_categories,id', // Table name correct karein
            'brand_ids'          => 'nullable|array', // Brand optional hai
            'brand_ids.*'        => 'exists:brands,id',
            'price'              => 'required|numeric|min:0',
            'description'        => 'nullable|string',
            'short_desc'        => 'nullable|string',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = Product::findOrFail($id);
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $folderPath = public_path('storage/admin_images/products');
    
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }
    
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'storage/admin_images/products/' . $imageName;
        } else {
            $imagePath = $product->image_name; // Keep old image
        }
    
        // Update product
        $product->update([
            'name'        => $validated['name'],
            'price'       => $validated['price'],
            'description' => $validated['description'],
            'short_desc' => $validated['short_desc'],
            'image_name'  => $imagePath,
        ]);
    
        // **Delete old relations**
        DB::table('category_product')->where('product_id', $product->id)->delete();
    
        // **Insert new relations**
        foreach ($validated['category_ids'] as $categoryId) {
            if (!empty($validated['sub_category_ids'])) {
                foreach ($validated['sub_category_ids'] as $subCategoryId) {
                    DB::table('category_product')->insert([
                        'product_id'      => $product->id,
                        'category_id'     => $categoryId,
                        'sub_category_id' => $subCategoryId,
                        'brand_id'        => $validated['brand_ids'][0] ?? null, // Brand can be NULL
                        'created_at'      => now(),
                        'updated_at'      => now(),
                    ]);
                }
            } else {
                DB::table('category_product')->insert([
                    'product_id'  => $product->id,
                    'category_id' => $categoryId,
                    'brand_id'    => $validated['brand_ids'][0] ?? null, // Brand can be NULL
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]);
            }
        }
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }    

    // Delete brand
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Products deleted successfully!');
    }
}
