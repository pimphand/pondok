<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eduaction;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ra()
    {
        $data = Register::where('education', "RA")->latest()->get();
        return view('admin.register.register',[
            "edu"    => "RA",
            "data"  => $data
        ]);
    }

    public function sd()
    {
        $data = Register::where('education', "SD")->latest()->get();
        return view('admin.register.register',[
            "edu"    => "SD",
            "data"  => $data
        ]);
    }

    public function smp()
    {
        $data = Register::where('education', "smp")->latest()->get();
        return view('admin.register.register',[
            "edu"    => "SMP",
            "data"  => $data
        ]);
    }

    public function sma()
    {
        $data = Register::where('education', "SMA")->latest()->get();
        return view('admin.register.register',[
            "edu"    => "SMA",
            "data"  => $data
        ]);
    }


    public function index()
    {
        $count = [
            "ra" => Register::where('education', "RA")->count(),
            "sd" => Register::where('education', "Sd")->count(),
            "smp" => Register::where('education', "Smp")->count(),
            "sma" => Register::where('education', "Sma")->count(),
        ];
        return view('admin.register.index', [
            "count" => $count
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
        $show = Register::findOrFail($id);
        // dd($show);
        return view('admin.register.detail',[
            "title"=> "Detail Pendaftaran",
            "data" => $show,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Register::findOrFail($id);
        return view('admin.register.edit',[
            "title"=> "Edit Pendaftaran ",
            "data" => $show,
        ]);
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
        Register::destroy($id);
        return back()->withToastSuccess('Data Berhasil di Hapus');
    }
}
