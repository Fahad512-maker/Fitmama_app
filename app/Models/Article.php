<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title' , 'article_category_id' , 'package_id' , 'image' , 'description' , 'user_id' , 'is_popular' , 'is_featured' , 'status'];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class , 'article_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
