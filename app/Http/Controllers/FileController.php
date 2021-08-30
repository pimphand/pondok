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
}
