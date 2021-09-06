<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::all();
        return view('admin.video.index',[
            "data" => $data,
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
        $request->validate([
            "name" => "required"
        ]);

        $video = new Video();
        $video->name = $request->name;
        $video->slug = Str::slug($request->name);
        $video->link = $request->link;
        if ($request->hasFile("video")) {
            $imageName = Str::uuid();
            FileController::video($request->file("video"), $imageName, $video->video);
            $video->video = $imageName;
        }

        $video->save();
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
         $request->validate([
            "name" => "required"
         ]);

         $video = Video::findOrFail($id);
         $video->name = $request->name;
         $video->slug = Str::slug($request->name);
         $video->link = $request->link;
         if ($request->hasFile("video")) {
            $imageName = Str::uuid();
            FileController::video($request->file("video"), $imageName, $video->video);
            $video->video = $imageName;
         }
            $video->save();

         return back()->withToastSuccess('Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        Video::destroy($id);
        Storage::delete('public/video/' . $video->video);

        return back()->withToastSuccess('<i class="fa fa-trash" style="color: red"></i> Data berhasil di hapus');
    }
}
