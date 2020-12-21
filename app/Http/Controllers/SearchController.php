<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function user()
    {
        $query = request('query');

        // $posts = User::where("name", "like", "%$query%")->latest()->paginate(10);

        $master = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "master");
        $admin = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "admin");
        $all_users = User::where("name", "like", "%$query%")->latest()->paginate(40)->where('level', "user");
        return view('admin.user.index', [
            'master_users' => $master,
            'admin_users' => $admin,
            'users' => $all_users,
        ]);
    }

    public function product()
    {
        $query = request('query');

        $products = Product::where("judul", "like", "%$query%")->latest()->paginate(40);
        $categories = Category::first()->orderBy('name')->paginate(40);
        return view('admin.product.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function article()
    {
        $query = request('query');

        $articles = Article::where("title", "like", "%$query%")->latest()->paginate(5);
        return view('admin.article.index', ['articles' => $articles]);
    }
}
