<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Pendaftaran;
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
        return view('admin.pendaftaran.index',[
            "title1"=> "Pendaftaran",
            "title2"=> "Pendaftaran Raudhathul Athfal (RA)",
            "data"  => $pendaftar,
        ]);
    }

    public function sd()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 2)->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Pendaftaran",
            "title2"=> "Pendaftaran Madrasah Salafiyah Ula Setara SD",
            "data"  => $pendaftar
        ]);
    }

    public function smp()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 3)->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Pendaftaran",
            "title2"=> "Pendaftaran Madrasah Salafiyah Wustha Setara SMP",
            "data" => $pendaftar
        ]);
    }

    public function sma()
    {
        $pendaftar = Pendaftaran::where('tingkatan_id', 4)->first();
        return view('admin.pendaftaran.index',[
            "title1"=> "Pendaftaran",
            "title2"=> "Pendaftaran Madrasah Salafiyah Ulya Setara SMA",
            "data" => $pendaftar
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
                "link"        => "required",
                "image"       => "mimes:jpeg,jpg|max:3048",
            ]);
        $daftar = Pendaftaran::findOrFail($id);
        $daftar->description = $request->description;
        $daftar->link = $request->link;

        if ($request->hasFile('image')) {
            $gambar = Str::uuid();
            FileController::pendaftar($request->file('image'), $gambar, $daftar->image);
            $daftar->image = $gambar;
        }
        $daftar->save();

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
