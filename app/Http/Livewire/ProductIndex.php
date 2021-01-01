<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    public $search;

    protected $updatesQueryString = ['Search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search != null) {
            $products = Product::where('judul', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::latest()->paginate(24);
        }
        $categories = Category::first()->orderBy('name')->paginate(10);
        return view('livewire.product-index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
