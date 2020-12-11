<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(40);
        $categories = Category::first()->orderBy('name')->paginate(40);
        return view('admin.product.index', [
            'products' => $products,

            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'product' => new Product()
        ]);
    }

    public function store()
    {

        //validate
        $attr = request()->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'harga' => 'required|numeric',
            'desc' => 'required'
        ]);

        // input gambar

        $nama_gambar = request()->file('gambar')->getClientOriginalName() . '-' . time() . '.' . request()->file('gambar')->extension();
        $destinationPath = 'img-product';
        $gambar = request()->file('gambar')->move($destinationPath, $nama_gambar);

        //Assign title to the slug
        $attr['slug'] = \Str::slug(request('judul'));

        $attr['gambar'] = $gambar;

        // create new
        Product::create($attr);

        Alert::success('Product telah ditambahkan');
        return redirect()->to(route('product-admin'));
    }

    public function destroy(Product $product)
    {
        // dd($portfolio);
        File::delete($product->gambar);
        $product->delete();
        Alert::warning('Produt Berhasil dihapus');
        return redirect()->to(route('product-admin'));
    }
}
