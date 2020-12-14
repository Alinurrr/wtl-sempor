<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title', 'slug', 'body', 'thumbnail', 'article_category_id'];

    public function article_category()
    {
        return $this->belongsTo(ArticleCategory::class);
    }
}
