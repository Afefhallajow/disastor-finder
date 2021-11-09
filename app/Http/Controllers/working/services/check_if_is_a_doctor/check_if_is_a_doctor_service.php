<?php
/*

namespace App\Http\Controllers\working\services\check_if_is_a_doctor;


use App\Http\Controllers\working\services\service;
use App\Models\doctor;

class check_if_is_a_doctor_service extends service
{

    public function execute()
    {
        $d_count=doctor::count();
        if($d_count==0){
            return false;
        }

        $email = $this->inputs->get_input_by_name("string");

        $illness=doctor::where('email','=',$email)->first();


        if($illness==null){ return false;}
        else  return true;

    }
}
