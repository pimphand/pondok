<?php

namespace App\Http\Livewire;

use App\Models\ReffRegister\Custodian;
use App\Models\ReffRegister\Father;
use App\Models\ReffRegister\Mother;
use App\Models\ReffRegister\PreviousLevel;
use App\Models\ReffRegister\ReffParent;
use App\Models\ReffRegister\SpecialNeed;
use App\Models\Register as ModelsRegister;

use Livewire\Component;

class Sd extends Component
{
    public $currentPage = 1;
    public $success;
    public $special = false, $move = false;

    public $pages = [
        1 => [
            'heading' => 'Biodata Calon Siswa',
            'subheading' => 'Enter your name and email to get started.',
        ],
        2 => [
            'heading' => 'Password',
            'subheading' => 'Create a password for the new account.',
        ],
    ];

    // Register
    public $nik,$nik_kk,$fullname,$slug,$gender,$place_birth,
    $date_birth,$child_to,$child_from,$status_student_family, $status_head_family,$country,
    $province,$city,$district,$Ward,$address,$place_address,
    $student_address,$phone,$distance_to_school,$vehicle,$hobby,
    $spp,$statement,$goals,$school_from,$school_address,$semester_move,$educationsd;

    // Parent
    public $p_address,$p_phone,$p_kps_no;
    // father
    public $f_parent_id,$f_name,$f_country,$f_birth_date,$f_birth_place,
            $f_nik,$f_education,$f_work,$f_income;
    // mother
    public $m_parent_id,$m_name,$m_country,$m_birth_date,$m_birth_place,
            $m_nik,$m_education,$m_work,$m_income;
    // kebutuhnan kusus
    public $s_register_id,$s_special_needs,$s_disease,$s_study_problem,$s_talent;
    // wali / Custodian
    public $c_register_id,$c_name,$c_nik,$c_homeroom,$c_address,$c_phone,$c_education,$c_work,$c_income;
    // Jenjang sebelumnya
    public $j_name ,$j_nisn ,$j_year_graduation ,$j_npsn ,$j_address;

    // form kebutuhan kusus
    public function formSpecialOpen()
    {
        $this->special = true;
    }

    public function formSpecialClose()
    {
        $this->special = false;
    }

    // form pindahan
    public function formMoveOpen()
    {
        $this->move = true;
    }

    public function formMoveClose()
    {
        $this->move = false;
    }

    public function goToNextPage()
    {
        // $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function mount()
    {
        $this->educationsd = 'sd';
    }

    protected $rules = [
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
        // "c_name" => "required",
        // "c_nik" => "required",
        // "c_homeroom" => "required",
        // "c_address" => "required",
        // "c_phone" => "required",
        // "c_education" => "required",
        // "c_work" => "required",
        // "c_income" => "required",
    ];

    public function simpan()
    {

        $this->validate();

        $register=  ModelsRegister::create([
            "nik" => $this->nik,
            "education" => $this->educationsd,
            "nik_kk" => $this->nik_kk,
            "fullname" => $this->fullname,
            "gender" => $this->gender,
            "slug" => $this->fullname,
            "country" => $this->country,
            "place_birth" => $this->place_birth,
            "date_birth" => $this->date_birth,
            "child_to" => $this->child_to,
            "child_from" => $this->child_from,
            "status_family" => $this->status_student_family,
            "status_head_family" => $this->status_head_family,
            "address" => $this->address,
            "province" => $this->province,
            "city" => $this->city,
            "district" => $this->district,
            "Ward" => $this->Ward,
            "place_address" => $this->place_address,
            "student_address" => $this->student_address,
            "phone" => $this->phone,
            "distance_to_school" => $this->distance_to_school,
            "vehicle" => $this->vehicle,
            "hobby" => $this->hobby,
            "spp" => $this->spp,
            "statement" => "$this->statement",
            "goals" => $this->goals,
            "school_from" => $this->school_from,
            "school_address" => $this->school_address,
            "semester_move" => $this->semester_move,
        ]);

        SpecialNeed::create([
            "id" => $register->id,
            "register_id" => $register->id,
            "special_needs" => $this->s_special_needs,
            "disease" => $this->s_disease,
            "study_problem" => $this->s_study_problem,
            "talent" => $this->s_talent,
        ]);

        $parent = ReffParent::create([
            "id" => $register->id,
            "register_id" => $register->id,
            "address" => $this->p_address,
            "phone" => $this->p_phone,
            "kps_no" => $this->p_kps_no,
        ]);

        Father::create([
            "id" => $register->id,
            "reff_parent_id" => $parent->id,
            "name" => $this->f_name,
            "country" => $this->f_country,
            "birth_date" => $this->f_birth_date,
            "birth_place" => $this->f_birth_place,
            "nik" => $this->f_nik,
            "education" => $this->f_education,
            "work" => $this->f_work,
            "income" => $this->f_income,
        ]);

        Mother::create([
            "id" => $register->id,
            "reff_parent_id" => $parent->id,
            "name" => $this->m_name,
            "country" => $this->m_country,
            "birth_date" => $this->m_birth_date,
            "birth_place" => $this->m_birth_place,
            "nik" => $this->m_nik,
            "education" => $this->m_education,
            "work" => $this->m_work,
            "income" => $this->m_income,
        ]);

        Custodian::create([
            "id" => $register->id,
            "register_id" => $register->id,
            "name" => $this->c_name,
            "nik" => $this->c_nik,
            "homeroom" => $this->c_homeroom,
            "address" => $this->c_address,
            "phone" => $this->c_phone,
            "education" => $this->c_education,
            "work" => $this->c_work,
            "income" => $this->c_income,
        ]);

        PreviousLevel::create([
            "id" => $register->id,
            "register_id" => $register->id,
            "name" => $this->j_name,
            "nisn" => $this->j_nisn,
            "year_graduation" => $this->j_year_graduation,
            "npsn" => $this->j_npsn,
            "address" => $this->j_address,
        ]);

        return redirect(route('home'));
    }


    public function render()
    {
        return view('livewire.sd');
    }
}
