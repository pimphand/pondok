<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Activity;
use App\Models\Building;
use App\Models\CalendarAcademic;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Picture;
use App\Models\Profile;
use App\Models\Teacher;
use App\Models\Tingkatan;
use App\Models\Video;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response as FacadesResponse;

class FrontendController extends Controller
{
    public function home()
    {
        $profil = Profile::select('description')->first();
        $news   = News::latest()->get();
        $video  = Video::all();
        $foto   = Picture::with('gallery')->latest()->get();
        return view('user.home.index',[
            "profil"    => $profil,
            'news'      => $news,
            "video"     => $video,
            "foto"      => $foto
        ]);
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
        $contact = Contact::first();
        return view('user.contact.index',[
            "contact" => $contact
        ]);
    }

    public function visionmission()
    {
        $profi = Profile::select('vision','mission')->first();
        return view('user.visionmission.index', [
            "profil" => $profi
        ]);
    }

    public function female()
    {
        $fasilitas  = Building::where('hostel_id', 2)->with('gallery')->get();
        $gallery    = Gallery::where('building_id', null)->limit(10)->get();
        return view('user.facility.index',[
            "title" => "Fasilitas",
            "data"  => $fasilitas,
            "photo" => $gallery
        ]);
    }

    public function male()
    {
        $fasilitas = Building::where('hostel_id', 1)->with('gallery')->get();
        $gallery   = Gallery::where('building_id', null)->limit(10)->get();
        return view('user.facility.index',[
            "title" => "Fasilitas",
            "data"  => $fasilitas,
            "photo" => $gallery
        ]);
    }

    public function video()
    {
        $video = Video::all();
        return view('user.galery.video',[
            "data" => $video
        ]);
    }

    public function photo()
    {
        $foto = Picture::with('gallery')->latest()->get();
        return view('user.galery.photo',[
            "data" => $foto
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

    public function pendaftaran($id)
    {
        $decrypted = Crypt::decryptString($id);
        $p = Pendaftaran::find($decrypted);
        return view('user.pendaftaran.daftar',[
            "title" => "Form Pendfaftaran RA",
            "p" => $p
        ]);
    }

    public function pendaftaransd($id)
    {
        $decrypted = Crypt::decryptString($id);
        $p = Pendaftaran::find($decrypted);
        return view('user.pendaftaran.sd.sd',[
            "title" => "Form Pendfaftaran SD",
            "p" => $p
        ]);
    }

    public function pendaftaransmp()
    {
        return view('user.pendaftaran.smp.smp',[
            "title" => "Form Pendfaftaran SMP"
        ]);
    }

    public function pendaftaransma()
    {
        return view('user.pendaftaran.sma.sma',[
            "title" => "Form Pendfaftaran SMA"
        ]);
    }


    public function guru()
    {
        $guru = Teacher::all();
        return view('user.akademik.guru',[
            "teacher" => $guru
        ]);
    }

    public function kalender()
    {
        $kalender = CalendarAcademic::select('image','name')->get();
        return view('user.akademik.kalender',[
            "data" => $kalender
        ]);
    }

    public function kegiatanputri()
    {
        $aktifitas = Activity::where('hostel_id', 2)->get();
        return view('user.aktifitas.index',[
            "title" => "Kegiatan Satri Putri",
            "data" => $aktifitas
        ]);
    }

    public function kegiatanputra()
    {
        $aktifitas = Activity::where('hostel_id', 1)->get();
        return view('user.aktifitas.index',[
            "title" => "Kegiatan Santri Putra",
            "data"  => $aktifitas
        ]);
    }

    public function ra()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 1)->first();
        return view('user.pendaftaran.index',[
            "title"=> "Pendaftaran Raudhathul Athfal (RA)",
            "data"  => $pendaftar,
        ]);
    }

    public function sd()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 2)->first();
        return view('user.pendaftaran.sd.index',[
            "title"     => "Pendaftaran Madrasah Salafiyah Ula Setara SD",
            "data"      => $pendaftar
        ]);
    }

    public function smp()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 3)->first();
        return view('user.pendaftaran.smp.index',[
            "title"=> "Pendaftaran Madrasah Salafiyah Wustha Setara SMP",
            "data" => $pendaftar
        ]);
    }

    public function sma()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 4)->first();
        return view('user.pendaftaran.sma.index',[
            "title"=> "Pendaftaran Madrasah Salafiyah Ulya Setara SMA",
            "data" => $pendaftar
        ]);
    }

    public function pass()
    {
        return view('user.password');
    }

    public function enter(Request $request)
    {
        $pas = $request->password;
        if($pas == null)
        {
            return back()->withMessages('password tidak boleh kosong');
        }
        if($pas)
        {
            $pass = Tingkatan::where("name",'Raudhathul Athfal')->where('password',$pas)->first();
            if(!$pass == null){
                return redirect(route('pendaftaran',Crypt::encryptString($pass->id)));
            }
            return back()->withMessages('passowd salah');
        }
    }

    public function passsd()
    {
        return view('user.sd');
    }

    public function entersd(Request $request)
    {
        $pas = $request->password;
        if($pas == null)
        {
            return back()->withMessages('password tidak boleh kosong');
        }
        if($pas)
        {
            $pass = Tingkatan::where('name', "Madrasah Salafiyah Ula Setara SD")->where('password',$pas)->first();
            if(!$pass == null){
                return redirect(route('pendaftaransd',Crypt::encryptString($pass->id)));
            }
            return back()->withMessages('passowd salah');
        }
    }

    public function passsmp()
    {
        return view('user.smp');
    }

    public function entersmp(Request $request)
    {
        $pas = $request->password;
        if($pas == null)
        {
            return back()->withMessages('password tidak boleh kosong');
        }
        if($pas)
        {
            $pass = Tingkatan::where('name', "Madrasah salafiyah Wustha Setara SMP")->where('password',$pas)->first();
            if(!$pass == null){
                return redirect(route('pendaftaransmp',Crypt::encryptString($pass->id)));
            }
            return back()->withMessages('passowd salah');
        }
    }

    public function passsma()
    {
        return view('user.sma');
    }

    public function entersma(Request $request)
    {
        $pas = $request->password;
        if($pas == null)
        {
            return back()->withMessages('password tidak boleh kosong');
        }
        if($pas)
        {
            $pass = Tingkatan::where('name', "Madrasah Salafiyah Ulya Setara SMA")->where('password',$pas)->first();
            if(!$pass == null){
                return redirect(route('pendaftaransma',Crypt::encryptString($pass->id)));
            }
            return back()->withMessages('passowd salah');
        }
    }


}
