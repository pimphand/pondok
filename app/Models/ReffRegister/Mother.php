<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    use HasFactory;
    protected $fillable = ["reff_parent_id","name","country","birth_date","birth_place","nik","education","work","income"];

}
