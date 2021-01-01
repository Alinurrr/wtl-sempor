<?php

namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        $news = Article::orderBy('created_at', 'desc')->take(3)->get();
        return view('livewire.article-index', [
            'news' => $news,
        ]);
    }
}
