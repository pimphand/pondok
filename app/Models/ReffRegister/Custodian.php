<?php

namespace App\Models\ReffRegister;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custodian extends Model
{
    use HasFactory;
    protected $fillable = ["register_id","name","nik","homeroom","address","phone","education","work","income"];
}
