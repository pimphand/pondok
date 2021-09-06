<?php

namespace App\Http\Controllers;

use App\Models\Building;
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

    public function female()
    {
        $fasilitas = Building::where('hostel_id', 2)->with('gallery')->get();
        return view('user.facility.index',[
            "title" => "Asrama Putri",
            "data" => $fasilitas
        ]);
    }

    public function male()
    {
        $fasilitas = Building::where('hostel_id', 1)->with('gallery')->get();
        return view('user.facility.index',[
            "title" => "Asrama Putra",
            "data" => $fasilitas
        ]);
    }

    public function galery()
    {
        return view('user.galery.index');
    }
}
