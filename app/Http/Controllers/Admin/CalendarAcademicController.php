<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\CalendarAcademic;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CalendarAcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CalendarAcademic::all();
        return view('admin.calender.index',[
            "data" => $data
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
            'name' => 'required',
            'image'=> 'image|mimes:png,jpg|max:2048',
        ]);

        $data = new CalendarAcademic();
        $data->name = $request->name;
        $data->created_by = Auth::id();

        if ($request->hasFile('image')) {
            $imageName = Str::uuid();
            FileController::calenders($request->file("image"), $imageName, $data->url);
            $data->image = $imageName;
        }
        $data->save();

        return back()->withToastSuccess('Data Berhasil di Simpan');
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
            'name' => 'required',
            'image'=> 'image|mimes:png,jpg|max:2048',
        ]);

        $calender = CalendarAcademic::findOrFail($id);
        $calender->name = $request->name;

        if ($request->hasFile('image')) {
            $imageName = Str::uuid();
            FileController::calenders($request->file('image'),$imageName, $calender->url);
            $calender->image = $imageName;
        }

        $calender->save();
        return back()->withToastSuccess('Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = CalendarAcademic::findOrFail($id);
        Storage::delete(['public/calenders/'. $image->image]);
        CalendarAcademic::destroy($id);

        return back()->withToastSuccess('Data Berhasil di Hapus');
    }
}
