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

    public static function video($image, $name, $oldName = null): void
    {
        if ($oldName) {
             Storage::delete('public/video/' . $oldName);
        }
             Storage::putFileAs("public/video", $image, $name);
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

    public static function gallery($image, $name, $oldName = null): void
    {
        if ($oldName) {
             Storage::delete('public/gallery/' . $oldName);
        }
             Storage::putFileAs("public/gallery", $image, $name);
    }

    public static function teacher($image, $name, $oldName = null): void
    {
          if ($oldName) {
          Storage::delete('public/teacher/' . $oldName);
          }
          Storage::putFileAs("public/teacher", $image, $name);
    }

    public static function calenders($image, $name, $oldName = null): void
    {
        if ($oldName) {
            Storage::delete('public/calenders/' . $oldName);
        }
        Storage::putFileAs("public/calenders/", $image, $name);
    }
}
