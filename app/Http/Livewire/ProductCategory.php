<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductCategory extends Component
{

    public $category;

    public function mount($categoryId)
    {
        $categoryDetail = Category::find($categoryId);
        if ($categoryDetail) {
            $this->category = $categoryDetail;
        }
    }


    public function render()
    {
        $products = Product::where('category_id', $this->category->id)->paginate(8);
        $categories = Category::first()->orderBy('name')->paginate(10);
        return view('livewire.product-index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
