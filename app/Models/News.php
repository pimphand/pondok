<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "slug",
        "image",
        "news_categories",
        "description",
        "create_by",
    ];

    protected $hidden = [
        "deleted_at",
        "delete_by",
    ];


    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_categories', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'create_by', 'id');
    }
}
