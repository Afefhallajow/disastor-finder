<?php


namespace App\Http\Controllers\working\services\add_illness;


use App\Http\Controllers\working\services\service;
use App\Models\illness;
use App\Models\symptom;

class addillness_service extends service
{

    public function execute()
    {
        $illness = $this->inputs->get_input_by_name("illness");


        $newillness = new illness();

        $newillness->name = $illness->name;
        $newillness->symptom_id=$illness->symptom_id;




        $newillness->save();
        return 'done';

    }


}
