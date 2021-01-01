<?php

namespace App\Http\Livewire;

use App\Article;
use App\ArticleCategory;
use Livewire\Component;

class ArticleCategoryFilter extends Component
{
    public $category;

    public function mount($categoryId)
    {
        $categoryDetail = ArticleCategory::find($categoryId);
        if ($categoryDetail) {
            $this->category = $categoryDetail;
        }
    }


    public function render()
    {
        $articles = Article::where('article_category_id', $this->category->id)->paginate(8);
        $categories = ArticleCategory::first()->orderBy('name')->paginate(10);
        return view('livewire.article-index', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
