<?php

namespace App\Models;

use App\Models\ReffRegister\Custodian;
use App\Models\ReffRegister\Father;
use App\Models\ReffRegister\PreviousLevel;
use App\Models\ReffRegister\ReffParent;
use App\Models\ReffRegister\SpecialNeed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory, SoftDeletes;
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
        "status_head_family",
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

    public function need()
    {
        return $this->hasOne(SpecialNeed::class);
    }

    public function parent()
    {
        return $this->hasOne(ReffParent::class);
    }

    public function custodian()
    {
        return $this->hasOne(Custodian::class);
    }

    public function previous()
    {
        return $this->hasOne(PreviousLevel::class);
    }

}
