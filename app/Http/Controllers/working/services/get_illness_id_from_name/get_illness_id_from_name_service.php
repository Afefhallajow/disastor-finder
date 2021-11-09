<?php
/*

namespace App\Http\Controllers\working\services\get_illness_id_from_name;


use App\Http\Controllers\working\services\service;
use App\Models\illness;

class get_illness_id_from_name_service extends service
{

    public function execute()
    {
        $d_count=illness::count();
        if($d_count==0){
            return false;
        }

        $name = $this->inputs->get_input_by_name("string");
        $illness=illness::all()->where('name','=',$name)->first;

        return $illness;

    }
}
*/
