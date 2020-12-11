<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10)->first();
        return view('admin.product.index', ['categories' => $categories]);
    }
    public function show(Category $category)
    {
        $products = $category->products()->latest()->paginate(6);
        return view('admin.product.index', compact('products', 'category'));
    }
}
