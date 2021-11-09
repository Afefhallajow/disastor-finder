<?php


namespace App\Http\Controllers\working\services\chick_if_illness_is_existed;


use App\Http\Controllers\working\services\service;
use App\Models\illness;

class chick_if_illness_is_existed_service extends service
{

    public function execute()
    {
        $d_count=illness::count();
        if($d_count==0){


        return false;
        }

        $name = $this->inputs->get_input_by_name("string");

        $illness=illness::where('name','=',$name)->first();


        if($illness==null){ return false;}
        else  return true;
    }
}
