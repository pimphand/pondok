<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $categories = NewsCategory::all();
        return view('admin.news.index',compact('news','categories'));
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
            "image" => "required|",
            "categories" => "required|",
            "description" => "required|string",
        ]);
        $new = new News();
        $new->name = $request->name;
        $new->slug = Str::slug($request->name);
        $new->news_categories = $request->categories;
        $new->description = $request->description;
        $new->create_by = Auth::id();

        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::news($request->file("image"), $imageName, $new->url);
            $new->image = $imageName;
        }

        $new->save();
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
            "name" => "required|string",
            "image" => "required|",
            "categories" => "required|",
            "description" => "required|string",
        ]);

        $new = News::findOrFail($id);
        $new->name = $request->name;
        $new->slug = Str::slug($request->name);
        $new->news_categories = $request->categories;
        $new->description = $request->description;

        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::news($request->file("image"), $imageName, $new->url);
            $new->image = $imageName;
        }

        $new->save();
        return back()->withToastSuccess('Data berhasil simpan');
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
