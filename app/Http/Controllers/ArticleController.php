<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('admin.article.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('admin.article.create', [
            'article' => new Article(),
            'article_categories' => ArticleCategory::get(),
        ]);
    }

    public function store()
    {

        //validate
        $attr = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'thumbnail' => 'required',
            'body' => 'required'
        ]);

        // input gambar
        $nama_gambar = request()->file('thumbnail')->getClientOriginalName() . '-' . time() . '.' . request()->file('thumbnail')->extension();
        $destinationPath = 'img-article';
        $gambar = request()->file('thumbnail')->move($destinationPath, $nama_gambar);

        //Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        $attr['article_category_id'] = request('category');

        $attr['thumbnail'] = $gambar;

        // create new
        // Article::create($attr);
        auth()->user()->articles()->create($attr);

        Alert::success('Article telah ditambahkan');
        return redirect()->to(route('article-admin'));
    }

    public function edit(Article $article)
    {
        //cek siapa yang login
        $this->authorize('update', $article);
        return view('admin.article.edit', [
            'article' => $article,
            'article_categories' => ArticleCategory::get(),
        ]);
    }

    public function update(Article $article)
    {
        //cek siapa yang login
        $this->authorize('update', $article);
        // dd('updated');
        //validate
        $attr = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        if (request()->file('thumbnail')) {
            \File::delete($article->thumbnail);
            $nama_gambar = request()->file('thumbnail')->getClientOriginalName() . '-' . time() . '.' . request()->file('thumbnail')->extension();
            $destinationPath = 'img-article';
            $gambar = request()->file('thumbnail')->move($destinationPath, $nama_gambar);
        } else {
            $gambar = $article->thumbnail;
        }


        $attr['thumbnail'] = $gambar;

        $attr['article_category_id'] = request('category');

        //update
        $article->update($attr);

        Alert::success('Article telah diedit');
        return redirect()->to(route('article-admin'));
    }

    public function destroy(Article $article)
    {
        //cek siapa yang login
        $this->authorize('update', $article);
        // dd($article);
        \File::delete($article->thumbnail);
        $article->delete();
        Alert::warning('Article Berhasil dihapus');
        return redirect()->to(route('article-admin'));
    }

    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }
}
