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
        "categories",
        "description",
        "create_by",
    ];

    protected $hidden = [
        "deleted_at",
        "delete_by",
    ];
}
