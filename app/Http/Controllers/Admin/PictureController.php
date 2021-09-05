<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.picture.index');
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
        $request->validate([
            "name"  => "required|string|max:100",
            "image" => "required",
            "image" => "mimes:jpg,png,svg|max:2000",
        ]);

        $picture = new Picture();
        $picture->name = $request->name;
        $picture->slug = Str::slug($request->name);
        $picture->save();

        if ($request->hasfile('image')) {
            $images = $request->file('image');
            foreach($images as $image) {
                 $name = $image->getClientOriginalName();
                 $image->storeAs('gallery', $name, 'public');
                 Gallery::create([
                     'building_id' => $picture->id,
                     'image' => $name
              ]);
            }
        }
        return back()->withToastSuccess('Data berhasil ditambahkan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Picture::destroy($id);
        return back()->withToastSuccess('Data Berhasil di Hapus');
    }
}
