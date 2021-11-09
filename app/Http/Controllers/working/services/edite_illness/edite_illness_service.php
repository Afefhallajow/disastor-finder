<?php

namespace App\Http\Controllers\working\services\edite_illness;


use App\Http\Controllers\working\services\service;
use App\Models\illness;

class edite_illness_service extends service
{

    public function execute()
    {

        $illness = $this->inputs->get_input_by_name("illness");




        $oldillness=illness::findOrfail($illness->id);


        if($oldillness->name==$illness->name){
            return false;

        }





        $oldillness->name=$illness->name;

        $oldillness->save();

        return true;

    }
}
