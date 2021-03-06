<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReffParent extends Model
{
    use HasFactory;
    protected $table = "reff_parents";
    protected $fillable = ["register_id","address","phone","kps_no"];

    protected $with = ["father","mother"];

    public function father()
    {
       return $this->hasOne(Father::class);
    }
    public function mother()
    {
       return $this->hasOne(Mother::class);
    }
}
