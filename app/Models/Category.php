<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'category_id')->with('categories');
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'category_news', 'category_id','news_id')->with('childCategories');
    }
}
