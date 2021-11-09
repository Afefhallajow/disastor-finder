<?php


namespace App\Http\Controllers\working\services\get_illness_by_name;


use App\Http\Controllers\working\services\service;
use App\Models\illness;

class get_illness_by_name_service extends service
{

    public function execute()
    {


        $name = $this->inputs->get_input_by_name("string");
        $illness=illness::where('name','=',$name)->first();

        return $illness;

    }
}
