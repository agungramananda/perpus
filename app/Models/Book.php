<?php

namespace App\Models;

use App\Models\Category;
use App\Models\BookCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_code', 'title', 'cover', 'slug'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }

    public function bookCategories()
    {
        return $this->hasMany(BookCategory::class);
    }
}