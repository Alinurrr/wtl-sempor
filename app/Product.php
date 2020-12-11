<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['gambar', 'judul', 'slug', 'harga', 'desc'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function takeImage()
    {
        return "/storage/" . $this->gambar;
    }
}
