<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Pendaftaran;
use App\Models\Tingkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ra()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 1)->first();
        $password = Tingkatan::where('name','Raudhathul Athfal')->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Informasi Pendaftaran",
            "title2"=> "Informasi Pendaftaran Raudhathul Athfal (RA)",
            "data"  => $pendaftar,
            "pass"  => $password
        ]);
    }

    public function sd()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 2)->first();
        $password = Tingkatan::where('name','Madrasah Salafiyah Ula Setara SD')->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Informasi Pendaftaran",
            "title2"=> "Informasi Pendaftaran Madrasah Salafiyah Ula Setara SD",
            "data"  => $pendaftar,
            "pass"  => $password
        ]);
    }

    public function smp()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 3)->first();
        $password = Tingkatan::where('name','Madrasah salafiyah Wustha Setara SMP')->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Informasi Pendaftaran",
            "title2"=> "Informasi Pendaftaran Madrasah Salafiyah Wustha Setara SMP",
            "data" => $pendaftar,
            "pass"  => $password
        ]);
    }

    public function sma()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 4)->first();
        $password = Tingkatan::where('name','Madrasah Salafiyah Ulya Setara SMA')->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Informasi Pendaftaran",
            "title2"=> "Informasi Pendaftaran Madrasah Salafiyah Ulya Setara SMA",
            "data" => $pendaftar,
            "pass"  => $password
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                "description" => "required",
                "image"       => "mimes:jpeg,jpg|max:3048",
            ]);
        $daftar = Pendaftaran::findOrFail($id);
        $daftar->description = $request->description;

        if ($request->hasFile('image')) {
            $gambar = Str::uuid();
            FileController::pendaftar($request->file('image'), $gambar, $daftar->image);
            $daftar->image = $gambar;
        }

        // if ($request->hasFile('image')) {
        //     $file       = $request->image;
        //     $fileimg = $file->getClientOriginalName();
        //     $file       ->move(public_path('storage/browsur'),$fileimg);
        //     $daftar->image = $fileimg;
        // }
        $daftar->save();

        $pass = Tingkatan::findOrFail($id);
        $pass->password = $request->password;
        $pass->save();

        return back()->withToastSuccess('Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
