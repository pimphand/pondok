<?php

namespace App\Http\Controllers\Admin\Hostel;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Building;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            "hostel" => "required",
            "image" => "required",
            "image.*" => "mimes:png,jpg|max:2048",
        ]);
        

        $hostel = Building::create([
            'name' => $request->name,
            'hostel_id' => $request->hostel
        ]);
        if ($request->hasfile('image')) {
            $images = $request->file('image');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('gallery', $name, 'public');

                Gallery::create([
                    'building_id' => $hostel->id,
                    'image' => '/storage/'.$path
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
        //
    }
}
