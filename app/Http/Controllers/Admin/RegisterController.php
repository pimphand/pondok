<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eduaction;
use App\Models\ReffRegister\Custodian;
use App\Models\ReffRegister\Father;
use App\Models\ReffRegister\Mother;
use App\Models\ReffRegister\PreviousLevel;
use App\Models\ReffRegister\ReffParent;
use App\Models\ReffRegister\SpecialNeed;
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
        $show = Register::with('custodian')->findOrFail($id);
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
        $request->validate([
            "nik" => "required",
            "nik_kk" => "required",
            "fullname" => "required",
            "gender" => "required",
            "country" => "required",
            "place_birth" => "required",
            "date_birth" => "required",
            "child_to" => "required",
            "child_from" => "required",
            "status_student_family" => "required",
            "status_head_family" => "required",
            "address" => "required",
            "province" => "required",
            "city" => "required",
            "district" => "required",
            "Ward" => "required",
            "place_address" => "required",
            "student_address" => "required",
            "phone" => "required",
            "distance_to_school" => "required",
            "vehicle" => "required",
            "hobby" => "required",
            "spp" => "required",
            "statement" => "required",
            "goals" => "required",
            "s_special_needs" => "required",
            "s_disease" => "required",
            "s_study_problem" => "required",
            "s_talent" => "required",
            "p_address" => "required",
            "p_phone" => "required",
            "p_kps_no" => "required",
            "f_name" => "required",
            "f_country" => "required",
            "f_birth_date" => "required",
            "f_birth_place" => "required",
            "f_nik" => "required",
            "f_education" => "required",
            "f_work" => "required",
            "f_income" => "required",
            "m_name" => "required",
            "m_country" => "required",
            "m_birth_date" => "required",
            "m_birth_place" => "required",
            "m_nik" => "required",
            "m_education" => "required",
            "m_work" => "required",
            "m_income" => "required",
        ]);
        Register::findOrFail($id)->update([
            "nik" => $request->nik,
            "education" => "smp",
            "nik_kk" => $request->nik_kk,
            "fullname" => $request->fullname,
            "gender" => $request->gender,
            "slug" => $request->fullname,
            "country" => $request->country,
            "place_birth" => $request->place_birth,
            "date_birth" => $request->date_birth,
            "child_to" => $request->child_to,
            "child_from" => $request->child_from,
            "status_family" => $request->status_student_family,
            "status_head_family" => $request->status_head_family,
            "address" => $request->address,
            "province" => $request->province,
            "city" => $request->city,
            "district" => $request->district,
            "Ward" => $request->Ward,
            "place_address" => $request->place_address,
            "student_address" => $request->student_address,
            "phone" => $request->phone,
            "distance_to_school" => $request->distance_to_school,
            "vehicle" => $request->vehicle,
            "hobby" => $request->hobby,
            "spp" => $request->spp,
            "statement" => "$request->statement",
            "goals" => $request->goals,
            "school_from" => $request->school_from,
            "school_address" => $request->school_address,
            "semester_move" => $request->semester_move,
        ]);

        SpecialNeed::findOrFail($id)->update([
            "special_needs" => $request->s_special_needs,
            "disease" => $request->s_disease,
            "study_problem" => $request->s_study_problem,
            "talent" => $request->s_talent,
        ]);

        ReffParent::findOrFail($id)->update([
            "address" => $request->p_address,
            "phone" => $request->p_phone,
            "kps_no" => $request->p_kps_no,
        ]);

        Father::findOrFail($id)->update([
            "name" => $request->f_name,
            "country" => $request->f_country,
            "birth_date" => $request->f_birth_date,
            "birth_place" => $request->f_birth_place,
            "nik" => $request->f_nik,
            "education" => $request->f_education,
            "work" => $request->f_work,
            "income" => $request->f_income,
        ]);

        Mother::findOrFail($id)->update([
            "name" => $request->m_name,
            "country" => $request->m_country,
            "birth_date" => $request->m_birth_date,
            "birth_place" => $request->m_birth_place,
            "nik" => $request->m_nik,
            "education" => $request->m_education,
            "work" => $request->m_work,
            "income" => $request->m_income,
        ]);

        Custodian::findOrFail($id)->update([
            "name" => $request->c_name,
            "nik" => $request->c_nik,
            "homeroom" => $request->c_homeroom,
            "address" => $request->c_address,
            "phone" => $request->c_phone,
            "education" => $request->c_education,
            "work" => $request->c_work,
            "income" => $request->c_income,
        ]);

        PreviousLevel::findOrFail($id)->update([
            "name" => $request->j_name,
            "nisn" => $request->j_nisn,
            "year_graduation" => $request->j_year_graduation,
            "npsn" => $request->j_npsn,
            "address" => $request->j_address,
        ]);

        return back()->withToastSuccess('Data Berhasil di Edit');


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
