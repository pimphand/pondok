<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','image'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}   
