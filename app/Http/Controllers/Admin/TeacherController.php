<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teacher.index');
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
            "name" => "required|string",
            "fullname" => "required|string",
            "image" => "required|mimes:jpg,png|max:2048",
            "teach" => "required|",
        ]);
        $data = new Teacher();
        $data->name = $request->name;
        $data->fullname = $request->fullname;
        $data->teach = $request->teach;
        $data->slug = Str::slug($request->name);

        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::teacher($request->file("image"), $imageName, $data->image);
            $data->image = $imageName;
        }

        $data->save();

        return back()->withToastSuccess('Data berhasil ditambah');
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
            "name" => "required|string",
            "fullname" => "required|string",
            "image" => "required|mimes:jpg,png|max:2048",
            "teach" => "required|",
        ]);
        $data = Teacher::findOrFail($id);
        $data->name = $request->name;
        $data->fullname = $request->fullname;
        $data->teach = $request->teach;
        $data->slug = Str::slug($request->name);

        if ($request->hasFile("image")) {
        $imageName = Str::uuid();
        FileController::teacher($request->file("image"), $imageName, $data->image);
        $data->image = $imageName;
        }

        $data->save();

        return back()->withToastSuccess('Data berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Teacher::findOrfail($id);
        Storage::delete(['public/news/'. $image->image]);
        Teacher::destroy($id);

        return back()->withToastSuccess('Data Berhasil di Hapus');
    }
}
