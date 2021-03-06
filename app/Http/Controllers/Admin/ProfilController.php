<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::first();
        return view('admin.profile.index', [
            'data' => $data
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
            "description" => "required|string",
            "history" => "required|string",
            "image" => "image|mimes:jpg,png|max:2048",
            "logo" => "image|mimes:jpg,png|max:2048",
        ]);

        $profil = Profile::findOrFail($id);
        $profil->description = $request->description;
        $profil->history = $request->history;
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::profil($request->file("image"), $imageName, $profil->image);
            $profil->image = $imageName;
        }
        if ($request->hasFile("logo")) {
            $imageName = Str::uuid();
            FileController::profil($request->file("logo"), $imageName, $profil->logo);
            $profil->logo = $imageName;
        }
        $profil->save();

        return back()->withToastSuccess('Data berhasil disimpan');

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
