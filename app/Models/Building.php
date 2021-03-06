<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];
    protected $hidden = ['deleted_at'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
