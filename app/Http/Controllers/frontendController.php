<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class frontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.index',compact('products', 'categories') ,['title' => 'Errothrone Internationol']);
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
}
