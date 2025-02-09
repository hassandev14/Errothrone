<?php
namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'), ['title' => 'Banners']);
    }
    public function create()
    {
        return view('admin.banner.create', ['title' => 'Add Banner']);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'desc'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');

            // Create a folder path for storing the image inside 'public/admin_images/brands'
            $folderPath = public_path('admin_images/banners');

            // Check if the folder exists, if not, create it
            if (! file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); // Create the folder with proper permissions
            }

            // Generate a unique name for the image to avoid overwriting
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the folder
            $image->move($folderPath, $imageName);

            // Store the relative path of the image in the database (relative to the 'public' directory)
            $imagePath = 'admin_images/banners/' . $imageName;
        } else {
            // If no image is uploaded, set the path to null or handle accordingly
            $imagePath = null;
        }

        // Create the Banner
        $product = Banner::create([
            'name'  => $validated['name'],
            'desc'  => $validated['desc'],
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully!');
    }
}
