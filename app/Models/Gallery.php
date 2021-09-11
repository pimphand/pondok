<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'image','building_id','picture_id'];
    protected $hidden = ['deleted_at'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
