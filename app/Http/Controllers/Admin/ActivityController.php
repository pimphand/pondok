<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::where('hostel_id', 2)->get();
        return view('admin.activity.index',[
            "activity" => $activity
        ]);
    }

    public function man()
    {
        $activity = Activity::where('hostel_id', 1)->get();
        return view('admin.activity.man', [
            "activity" => $activity
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
            'image' => 'mimes:jpeg,jpg|max:2048'
        ]);

        $activity = new Activity();
        $activity->description = $request->description;
        $activity->name = $request->name;
        $activity->hostel_id = $request->hostel;
        $activity->created_by = Auth::id();

        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::activity($request->file("image"), $imageName,$activity->image);
            $activity->image = $imageName;
        }

        $activity->save();

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
            'image' => 'mimes:jpeg,jpg|max:2048'
        ]);

        $activity = Activity::findOrFail($id);
        $activity->description = $request->description;
        $activity->name = $request->name;

        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::activity($request->file("image"), $imageName, $activity->image);
            $activity->image = $imageName;
        }
        // $activity->create_by = Auth::id();
        $activity->save();

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
        $activity = Activity::find($id);
        Activity::destroy($id);
        Storage::delete('public/activity/' . $activity->image);

        return back()->withToastSuccess('<i class="fa fa-trash" style="color: red"></i> Data berhasil di hapus');
    }
}
