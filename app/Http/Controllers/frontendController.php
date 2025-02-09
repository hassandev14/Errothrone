<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;

class frontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $banners = Banner::all();
        $categories = Category::with(['subcategories','brands'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.index',compact('products', 'categories', 'banners') ,['title' => 'Errothrone Internationol']);
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
}
