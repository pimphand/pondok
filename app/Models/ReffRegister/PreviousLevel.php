<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousLevel extends Model
{
    use HasFactory;
    protected $fillable  = [
        "register_id",
        "name",
        "nisn",
        "year_graduation",
        "npsn",
        "address",
    ];
}
