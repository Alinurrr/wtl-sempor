<?php

namespace App\Http\Controllers;

use App\Article;
use App\Pesanan;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = User::where('level', "admin")->count();
        $user = User::where('level', "user")->count();
        $jmlArticle = Article::count();
        $jmlProduct = Product::count();
        $pesanans = Pesanan::latest()->take(10)->get();
        $articles = Article::latest()->take(3)->get();
        return view('admin.index', [
            'admin' => $admin,
            'user' => $user,
            'jmlArticle' => $jmlArticle,
            'jmlProduct' => $jmlProduct,
            'articles' => $articles,
            'pesanans' => $pesanans,
        ]);
    }
}
