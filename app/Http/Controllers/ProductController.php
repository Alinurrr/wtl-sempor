<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(12);
        $categories = Category::first()->orderBy('name')->paginate(12);
        return view('admin.product.index', [
            'products' => $products,

            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'product' => new Product(),
            'categories' => Category::get(),
        ]);
    }

    public function store()
    {
        // dd(auth()->user());

        //validate
        $attr = request()->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'category' => 'required',
            'harga' => 'required|numeric',
            'rekomendasi' => 'required',
            'desc' => 'required'
        ]);

        // dd($attr);
        // input gambar

        $nama_gambar = request()->file('gambar')->getClientOriginalName() . '-' . time() . '.' . request()->file('gambar')->extension();
        $destinationPath = 'img-product';
        $gambar = request()->file('gambar')->move($destinationPath, $nama_gambar);

        //Assign title to the slug
        $attr['slug'] = \Str::slug(request('judul'));

        $attr['category_id'] = request('category');

        $attr['gambar'] = $gambar;

        // create new
        // $post =  auth()->user()->posts()->create($attr);
        auth()->user()->products()->create($attr);

        Alert::success('Product telah ditambahkan');
        return redirect()->to(route('product-admin'));
    }

    public function edit(Product $product)
    {
        //cek siapa yang login
        $this->authorize('update', $product);
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::get(),
        ]);
    }

    public function update(Product $product)
    {
        // dd('updated');

        //cek siapa yang login
        $this->authorize('update', $product);

        //validate
        $attr = request()->validate([
            'judul' => 'required',
            'category' => 'required',
            'harga' => 'required|numeric',
            'rekomendasi' => 'required',
            'desc' => 'required'
        ]);

        if (request()->file('gambar')) {
            File::delete($product->gambar);
            $nama_gambar = request()->file('gambar')->getClientOriginalName() . '-' . time() . '.' . request()->file('gambar')->extension();
            $destinationPath = 'img-product';
            $gambar = request()->file('gambar')->move($destinationPath, $nama_gambar);
        } else {
            $gambar = $product->gambar;
        }


        $attr['gambar'] = $gambar;

        $attr['category_id'] = request('category');

        //update
        $product->update($attr);

        Alert::success('Product telah diedit');
        return redirect()->to(route('product-admin'));
    }

    public function destroy(Product $product)
    {
        $this->authorize('update', $product);
        // dd($portfolio);
        File::delete($product->gambar);
        $product->delete();
        Alert::warning('Produt Berhasil dihapus');
        return redirect()->to(route('product-admin'));
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }
}
