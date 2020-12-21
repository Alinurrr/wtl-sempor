<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['gambar', 'judul', 'slug', 'harga', 'desc', 'category_id'];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function takeImage()
    {
        return "/storage/" . $this->gambar;
    }
}
