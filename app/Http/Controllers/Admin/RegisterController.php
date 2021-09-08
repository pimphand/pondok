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

    public function tk()
    {
        $data = Register::where('education', "Tk")->latest();
        return view('admin.register.register',[
            "edu"    => "TK",
            "data"  => $data
        ]);
    }

    public function mi()
    {
        $data = Register::where('education', "MI")->latest();
        return view('admin.register.register',[
            "edu"    => "MI",
            "data"  => $data
        ]);
    }

    public function smp()
    {
        $data = Register::where('education', "SMP")->latest();
        return view('admin.register.register',[
            "edu"    => "SMP",
            "data"  => $data
        ]);
    }
    
    public function sma()
    {
        $data = Register::where('education', "SMA")->latest();
        return view('admin.register.register',[
            "edu"    => "SMA",
            "data"  => $data
        ]);
    }


    public function index()
    {
        $count = [
            "tk" => Register::where('education', "Tk")->count(),
            "mi" => Register::where('education', "Mi")->count(),
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
