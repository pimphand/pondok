<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function admin()
    {
       $data =User::all();
       return view('dashboard',[
           'users' => $data
       ]);
    }

    public function delete($id)
    {
        User::destroy($id);
        
        return back()->withToastSuccess('Data berhasil dihapus');
    }

    public function store(Request $request)
    {
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users",
        ]);

        User::create([
            "email" => $request->email,
            "username" => $request->username,
            "name" => "faisal",
            "password"=> Hash::make("faisal"),
        ]);
    
        return back()->withToastSuccess('Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $materi = User::findOrFail($id);
        $materi->delete();

         if($materi){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
