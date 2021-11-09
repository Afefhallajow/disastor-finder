<?php


namespace App\Http\Controllers\working\services\get_symptom_from_illness_name;


use App\Http\Controllers\working\services\service;
use App\Models\illness;
use App\Models\symptom;

class get_symtom_from_illness_name   extends service
{

    public function execute()
    {


        $name = $this->inputs->get_input_by_name("string");

        $illness=illness::where('name','=',$name)->first();

        $symtom=symptom::where('id','=',$illness->symptom_id)->first();

        return $symtom;

    }
}
