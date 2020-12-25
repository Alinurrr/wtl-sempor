<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::latest()->paginate(12);
        $categories = Category::first()->orderBy('name')->paginate(10);
        return view('livewire.product-index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
