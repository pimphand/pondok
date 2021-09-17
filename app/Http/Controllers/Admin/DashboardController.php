<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            "ra" => Register::where('education', "RA")->count(),
            "sd" => Register::where('education', "Sd")->count(),
            "smp" => Register::where('education', "Smp")->count(),
            "sma" => Register::where('education', "Sma")->count(),
        ];
        return view('admin.dashboard',[
            "count" => $count
        ]);
    }

}
