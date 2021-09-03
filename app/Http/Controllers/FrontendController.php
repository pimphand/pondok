<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('user.home.index');
    }

    public function profil()
    {
        return view('user.profile.index');
    }

    public function contact()
    {
        return view('user.contact.index');
    }

    public function visionmission()
    {
        return view('user.visionmission.index');
    }
}
