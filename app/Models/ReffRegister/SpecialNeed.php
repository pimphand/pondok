<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialNeed extends Model
{
    use HasFactory;
    protected $fillable = ["register_id","special_needs","disease","study_problem","talent"];
}
