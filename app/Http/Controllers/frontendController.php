<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Banner;
use App\Models\OrderItem;
use App\Models\AttributeCategory;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // $products = Product::select('products.*')
        // ->join('order_items', 'products.id', '=', 'order_items.product_id')
        // ->selectRaw('COUNT(order_items.product_id) as order_count')
        // ->groupBy('products.id')
        // ->orderByDesc('order_count')
        // ->take(4) // ✅ Get only top 4 products
        // ->get();    
        $banners = Banner::all();
        //$categories = Category::with(['subcategories','brands'])->get();
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.index',compact('products', 'attributeCategories', 'banners') ,['title' => 'Errothrone Internationol']);
    }
    public function about()
    {
        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.about',compact('categories'),['title' => 'About Us']);
    }
    public function store()
    {
        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.shop',compact('categories'),['title' => 'Our Store']);
    }
    public function contact()
    {
        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.contact',compact('categories'),['title' => 'Contact Us']);
    }
    public function product_detail($id){

        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        $product = Product::find($id);
        return view('frontend.shop-detail',compact('product','categories'),['title' => $product->name]);
    }
    public function show_category($category_name){

        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        $products = Product::whereHas('categories', function($query) use ($category_name) {
            $query->where('name', $category_name);
        })->get();
        return view('frontend.shop',compact('products','categories','category_name'),['title' => $category_name]);
    }
    public function show_sub_category($sub_category_name)
    {
        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        
        $products = Product::whereHas('subCategories', function($query) use ($sub_category_name) {
            $query->where('name', $sub_category_name);
        })->get();
        return view('frontend.sub_cat_shop', compact('products', 'categories', 'sub_category_name'), ['title' => $sub_category_name]);
    }
}
