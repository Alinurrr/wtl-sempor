<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $products = Product::where("rekomendasi", 1)->latest()->paginate(8);
        $categories = Category::first()->orderBy('name')->paginate(10);
        return view('livewire.home', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
