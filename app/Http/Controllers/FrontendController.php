<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Picture;
use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('user.home.index');
    }

    public function profil()
    {
        $profi = Profile::select('description')->first();
        return view('user.profile.index', [
            "profil" => $profi
        ]);
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
        $fasilitas  = Building::where('hostel_id', 2)->with('gallery')->get();
        $gallery    = Gallery::where('building_id', null)->limit(10)->get();
        return view('user.facility.index',[
            "title" => "Pasilitas",
            "data"  => $fasilitas,
            "photo" => $gallery
        ]);
    }

    public function male()
    {
        $fasilitas = Building::where('hostel_id', 1)->with('gallery')->get();
        $gallery   = Gallery::where('building_id', null)->limit(10)->get();
        return view('user.facility.index',[
            "title" => "Pasilitas",
            "data"  => $fasilitas,
            "photo" => $gallery
        ]);
    }

    public function video()
    {
        $video = Video::latest()->get();
        return view('user.galery.video',[
            "data" => $video
        ]);
    }

    public function photo()
    {
        $video = Picture::latest()->get();
        return view('user.galery.photo',[
            "data" => $video
        ]);
    }

    public function news()
    {
        $news = News::latest()->get();
        return view('user.news.index',[
            'news' => $news
        ]);
    }

    public function detailNews(News $news)
    {
        $news->increment('views');
        return view('user.news.detail', compact('news'));
    }

    public function sejarah()
    {
        $profi = Profile::select('history')->first();
        return view('user.sejarah.index',[
            "profil" => $profi
        ]);
    }

    public function pendaftaran()
    {
        return view('user.pendaftaran.index');
    }
}
