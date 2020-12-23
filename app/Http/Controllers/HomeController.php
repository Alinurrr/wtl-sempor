<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where("rekomendasi", 1)->latest()->paginate(4);
        $categories = Category::first()->orderBy('name')->paginate(10);
        return view('home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
