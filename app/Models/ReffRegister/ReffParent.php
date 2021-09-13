<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReffParent extends Model
{
    use HasFactory;
    protected $table = "parents";
    protected $fillable = ["register_id","address","phone","kps_no"];
}
