<?php

namespace App\Http\Livewire\User\Register;

use App\Models\ReffRegister\Father;
use App\Models\ReffRegister\Mother;
use App\Models\ReffRegister\ReffParent;
use App\Models\ReffRegister\SpecialNeed;
use App\Models\Register as ModelsRegister;
use Livewire\Component;

class Register extends Component
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
    $spp,$statement,$goals,$school_from,$school_address,$semester_move;

    // Parent
    public $p_address,$p_phone,$p_kps_no;
    // father 
    public $f_parent_id,$f_name,$f_country,$f_birth_date,$f_birth_place,$f_nik,$f_education,$f_work,$f_income;
    // mother
    public $m_parent_id,$m_name,$m_country,$m_birth_date,$m_birth_place,$m_nik,$m_education,$m_work,$m_income;
    // kebutuhnan kusus
    public $s_register_id,$s_special_needs,$s_disease,$s_study_problem,$s_talent;
    // wali / Custodian
    public $c_register_id,$c_name,$c_nik,$c_homeroom,$c_address,$c_phone,$c_education,$c_work,$c_income;

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


    public function simpan()
    {
       $register=  ModelsRegister::create([
            "nik" => $this->nik,
            "education" => "smp",
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
            "spp" => 123,
            "statement" => "adf",
            "goals" => $this->goals,
            "school_from" => $this->school_from,
            "school_address" => $this->school_address,
            "semester_move" => $this->semester_move,
        ]);

        SpecialNeed::create([
            "register_id" => $register->id,
            "special_needs" => $this->s_special_needs,
            "disease" => $this->s_disease,
            "study_problem" => $this->s_study_problem,
            "talent" => $this->s_talent,
        ]);

        $parent = ReffParent::create([
            "register_id" => $register->id,
            "address" => $this->p_address,
            "phone" => $this->p_phone,
            "kps_no" => $this->p_kps_no,
        ]);

        Father::create([
            "parent_id" => $parent->id,
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
            "parent_id" => $parent->id,
            "name" => $this->m_name,
            "country" => $this->m_country,
            "birth_date" => $this->m_birth_date,
            "birth_place" => $this->m_birth_place,
            "nik" => $this->m_nik,
            "education" => $this->m_education,
            "work" => $this->m_work,
            "income" => $this->m_income,
        ]);

    }
    
    public function render()
    {
        return view('livewire.user.register.register');
    }
}
