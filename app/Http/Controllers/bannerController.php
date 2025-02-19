<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $folderPath = public_path('storage/admin_images/banners');

            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true); 
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'storage/admin_images/banners/' . $imageName;
        } else {
            $imagePath = null;
        }

        Banner::create([
            'name'  => $validated['name'],
            'desc'  => $validated['desc'],
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully!');
    }

    // Show the edit form with existing banner data
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'), ['title' => 'Edit Banner']);
    }

    // Update the banner data
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'desc'  => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $banner = Banner::findOrFail($id);

        // If a new image is uploaded, handle the file upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if (File::exists(public_path($banner->image))) {
                File::delete(public_path($banner->image));
            }

            $image = $request->file('image');
            $folderPath = public_path('storage/admin_images/banners');

            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($folderPath, $imageName);
            $imagePath = 'storage/admin_images/banners/' . $imageName;
        } else {
            $imagePath = $banner->image; // Keep the old image if no new image is uploaded
        }

        // Update the banner data
        $banner->update([
            'name'  => $validated['name'],
            'desc'  => $validated['desc'],
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully!');
    }

    // Delete the banner
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Delete the banner image from the server
        if (File::exists(public_path($banner->image))) {
            File::delete(public_path($banner->image));
        }

        // Delete the banner from the database
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully!');
    }
}
