<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public static function news($image, $name, $oldName = null): void
    {
        if ($oldName) {
             Storage::delete('public/news/' . $oldName);
        }
             Storage::putFileAs("public/news", $image, $name);
    }
    public static function profil($image, $name, $oldName = null): void
    {
        if ($oldName) {
             Storage::delete('public/profil/' . $oldName);
        }
             Storage::putFileAs("public/profil", $image, $name);
    }

    public static function activity($image, $name, $oldName = null): void
    {
        if ($oldName) {
             Storage::delete('public/activity/' . $oldName);
        }
             Storage::putFileAs("public/activity", $image, $name);
    }
    
}
