<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        "nik",
        "education",
        "nik_kk",
        "fullname",
        "slug",
        "gender",
        "place_birth",
        "date_birth",
        "child_to",
        "child_from",
        "status_family",
        "country",
        "province",
        "city",
        "district",
        "Ward",
        "address",
        "place_address",
        "student_address",
        "phone",
        "distance_to_school",
        "vehicle",
        "hobby",
        "spp",
        "statement",
        "goals",
        "school_from",
        "school_address",
        "semester_move",
    ];
}
