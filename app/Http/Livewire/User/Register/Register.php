<?php

namespace App\Http\Livewire\User\Register;

use Livewire\Component;

class Register extends Component
{
    public $currentPage = 1;
    public $success;

    // Register
    public $nik,$nik_kk,$fullname,$slug,$gender,$place_birth,$date_birth,$child_to,$child_from,$status_family,$country,$province,$city,$district,$Ward,$address,$place_address,$student_address,$phone,$distance_to_school,$vehicle,$hobby,$spp,$statement,$goals,$school_from,$school_address,$semester_move;
    // Parent
    public $register_id,$address,$phone,$kps_no;
    // father 
    public $f_parent_id,$f_name,$f_country,$f_birth_date,$f_birth_place,$f_nik,$f_education,$f_work,$f_income;
    // mother
    public $m_parent_id,$m_name,$m_country,$m_birth_date,$m_birth_place,$m_nik,$m_education,$m_work,$m_income;
    // kebutuhnan kusus
    public $s_register_id,$s_special_needs,$s_disease,$s_study_problem,$s_talent;
    // wali / Custodian
    public $c_register_id,$c_name,$c_nik,$c_homeroom,$c_address,$c_phone,$c_education,$c_work,$c_income;

    public function render()
    {
        return view('livewire.user.register.register');
    }
}
