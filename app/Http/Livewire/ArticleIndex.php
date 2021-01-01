<?php

namespace App\Http\Livewire;

use App\Article;
use App\ArticleCategory;
use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        $articles = Article::latest()->paginate(9);
        $categories = ArticleCategory::first()->orderBy('name')->paginate(10);
        return view('livewire.article-index', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
