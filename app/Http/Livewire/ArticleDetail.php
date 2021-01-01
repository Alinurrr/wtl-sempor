<?php

namespace App\Http\Livewire;

use App\Article;
use Livewire\Component;

class ArticleDetail extends Component
{
    public $article, $idCategory;
    public function mount($id)
    {
        $articleDetail = Article::find($id);

        // dd($productDetail);
        if ($articleDetail) {
            $this->article = $articleDetail;
        }
    }

    public function render()
    {
        $articleTerkaits = Article::where("article_category_id", $this->article->article_category_id)->latest()->paginate(8);
        return view('livewire.article-detail', [
            'articleTerkaits' => $articleTerkaits,
        ]);
    }
}
